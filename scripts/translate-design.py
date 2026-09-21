from bs4 import BeautifulSoup,NavigableString,Comment
from pathlib import Path
import re,json,subprocess,html
root=Path('reference/stitch_modern_school_foundation_portal'); dest=Path('resources/views');seeds=[];entities={};configs=[]
mapping={'beranda':('home','/'),'tentang_kami':('about','/tentang'),'direktori_sekolah':('schools','/sekolah'),'sd_harapan':('sd','/sekolah/sd'),'smp_harapan':('smp','/sekolah/smp'),'sma_harapan':('sma','/sekolah/sma'),'akademik_program':('academic','/akademik'),'warta_cerita':('news','/berita'),'menumbuhkan_sikap':('article','/berita/inquiry-adab'),'rekam_prestasi':('achievements','/prestasi'),'fasilitas_kampus':('facilities','/fasilitas'),'kehidupan_siswa':('gallery','/galeri'),'portal_ppdb':('admissions','/ppdb'),'kontak_kunjungan':('contact','/kontak')}
selectors={'news':('.article-card','News'),'achievements':('.prestasi-card','Achievement'),'academic':('.program-card','Program'),'facilities':('.facility-card','Facility'),'gallery':('.gallery-item','Gallery')}
navmap={'#beranda':'/','#tentang':'/tentang','#tentang-kami':'/tentang','#unit-sd':'/sekolah/sd','#unit-smp':'/sekolah/smp','#unit-sma':'/sekolah/sma','#sd':'/sekolah/sd','#smp':'/sekolah/smp','#sma':'/sekolah/sma','#sekolah':'/sekolah','#unit-pendidikan':'/sekolah','#akademik':'/akademik','#prestasi':'/prestasi','#fasilitas':'/fasilitas','#galeri':'/galeri','#kehidupan-sekolah':'/galeri','#berita':'/berita','#ppdb':'/ppdb','#kontak':'/kontak','#visi-misi':'/tentang/visi-misi','#sejarah':'/tentang/sejarah'}
def slug(s):return re.sub('[^a-z0-9]+','-',s.lower()).strip('-')[:180]
def raw(tag,s):tag.replace_with(NavigableString(s))
def clean(soup,page):
 for t in soup(['script','style']):t.decompose()
 for t in soup.find_all(string=lambda t:isinstance(t,Comment)):t.extract()
 for t in soup.find_all(True):
  if t.attrs is None:continue
  classes=t.get('class',[])
  custom={'font-serif-headline':'font-serif','font-script':'font-handwriting','curved-mask':'rounded-[42px_42px_180px_42px]','organic-arch':'rounded-t-[120px]','rounded-DEFAULT':'rounded-[1rem]'}
  radii= {'rounded':'rounded-[1rem]','rounded-lg':'rounded-[2rem]','rounded-xl':'rounded-[3rem]'} if page!='home' else {'rounded':'rounded-[0.25rem]','rounded-lg':'rounded-[0.5rem]','rounded-xl':'rounded-[0.75rem]'}
  t['class']=[custom.get(c,radii.get(c,c)) for c in classes if c not in ['custom-scrollbar','animate-fade-in']]
  if 'material-symbols-outlined' in classes:
   t['class']=[c for c in t['class'] if c!='material-symbols-outlined']+['font-symbols','font-normal','not-italic','leading-none','normal-case','whitespace-nowrap','[font-feature-settings:\'liga\']','[word-wrap:normal]'];t['aria-hidden']='true'
  style=t.attrs.pop('style','')
  if 'FILL' in style:t['class']+=['[font-variation-settings:\'FILL\'_1]']
  if 'background-color: rgb(13, 51, 38)' in style:t['class']+=['bg-forest-ink','text-white','border-forest-ink']
  if 'background-color: rgb(8, 29, 22)' in style:t['class']+=['bg-forest-night']
  if 'border-left-width' in style:t['class']+=['border-l-4','border-forest-ink','bg-white']
  if 'background-color: rgb(255, 219, 202)' in style:t['class']+=['bg-peach','text-peach-ink','border','border-peach-border']
  if 'mask-image:' in style:t['class']+=['[mask-image:radial-gradient(ellipse_at_60%_50%,black_50%,rgba(0,0,0,0.85)_65%,transparent_95%),linear-gradient(to_right,transparent_0%,rgba(0,0,0,0.6)_18%,black_40%)]','[mask-composite:intersect]']
  if 'background-image:' in style:
   url=re.search(r"url\('([^']+)'\)",style).group(1);img=soup.new_tag('img',src=url);img['class']=['absolute','inset-0','w-full','h-full','object-cover','-z-10'];t.insert(0,img);t['class']+=['relative','isolate']
  click=t.attrs.pop('onclick','')
  for a in list(t.attrs):
   if a.startswith('on'):del t[a]
  if 'toggleFaq' in click:
   par=t.parent;par['x-data']='{ expanded: false }';t['@click']='expanded = !expanded';t[':aria-expanded']='expanded';n=t.find_next_sibling();
   if n:n['x-show']='expanded';n['class']=[c for c in n.get('class',[]) if c!='hidden'];n['x-cloak']=''
  elif 'switchTimeline' in click:t.name='a';t['href']='/tentang/sejarah'
  elif 'Modal' in click or 'Tour' in click:
   t.name='a';t['href']='/ppdb/'+re.search(r'modal-(sd|smp|sma)',click).group(1) if re.search(r'modal-(sd|smp|sma)',click) else '/kontak#formulir'
  if t.name=='img':t['alt']=t.get('alt',t.get('data-alt','Aktivitas Harapan Mulia'));t['loading']='lazy';t['decoding']='async';t.attrs.pop('data-alt',None)
  if t.name=='a':
   href=t.get('href','#');text=t.get_text(' ',strip=True).lower()
   if href in navmap:t['href']=navmap[href]
   elif href.startswith('#detail-artikel'):t['href']='/berita/inquiry-adab'
   elif href=='#':
    t['href']=next((u for k,u in [('sd harapan','/sekolah/sd'),('smp harapan','/sekolah/smp'),('sma harapan','/sekolah/sma'),('daftar','/ppdb'),('ppdb','/ppdb'),('berita','/berita'),('artikel','/berita'),('prestasi','/prestasi'),('fasilitas','/fasilitas'),('galeri','/galeri'),('kontak','/kontak'),('profil','/tentang'),('visi','/tentang/visi-misi'),('sejarah','/tentang/sejarah'),('sekolah','/sekolah')] if k in text),'/kontak')
  if t.name=='button' and not any(a.startswith('@') for a in t.attrs) and t.get('type')!='submit':
   if t.has_attr('data-category') or t.has_attr('data-filter') or t.has_attr('data-value'):
    t.name='a';value=t.get('data-category',t.get('data-filter',t.get('data-value','all')));key='school' if value in ['sd','smp','sma'] else 'category';t['href']='?'+key+'='+('' if value=='all' else value)+'#koleksi'
   elif t.get('id')=='load-more-btn':t.decompose();continue
   else:t.name='a';t['href']='/kontak'
  if t.name in ['input','select','textarea'] and not t.get('aria-label'):t['aria-label']=t.get('placeholder','Isian formulir')
 return soup

def bind(soup,var,data):
 for t in soup.find_all('img'):
  k='image_'+str(len(data['images'])+1);data['images'][k]=t.get('src','');t['src']="{{ "+var+"->media('"+k+"') }}"
 for node in list(soup.find_all(string=True)):
  if not node.strip() or '{{' in node or '<x-' in node or '@' in node[:1] or node.parent.name in ['script','style','svg','path','title']:continue
  if 'font-symbols' in node.parent.get('class',[]):continue
  val=str(node).strip();k='text_'+str(len(data['copy'])+1);data['copy'][k]=val;node.replace_with(NavigableString("{{ "+var+"->text('"+k+"') }}"))
 return soup

for p in root.rglob('code.html'):
 page,route=next(v for k,v in mapping.items() if k in str(p));source=p.read_text();soup=BeautifulSoup(source,'html.parser')
 config=next((s.string for s in soup.find_all('script') if s.string and 'tailwind.config' in s.string),'');cfg=json.loads(subprocess.check_output(['node','-e','let tailwind={};'+config+';process.stdout.write(JSON.stringify(tailwind.config.theme.extend))']).decode());configs.append(cfg)
 soup=clean(soup,page);title=soup.title.get_text();main=soup.find('main')
 if not main: main=soup.body
 main['id']='main-content'
 for modal in main.select('#modal-container,#facility-spec-modal,#form-success-banner,#tour-success-msg,#newsletter-success,#no-articles-found'):modal.decompose()
 for form in main.find_all('form'):
  if form.get('id')=='newsletter-form':raw(form,'<x-newsletter-form />')
  else:raw(form,'<x-inquiry-form />')
 data={'copy':{},'images':{},'route':route,'view':page}
 # Repeating domain content uses the exported card structure, not a generic redesign.
 if page in selectors:
  selector,model=selectors[page];cards=main.select(selector); records=[]
  if cards:
   template=None
   for i,card in enumerate(cards):
    heading=card.find(re.compile('^h[1-6]$'));desc=card.find('p');im=card.find('img');record={'title':heading.get_text(' ',strip=True),'description':desc.get_text(' ',strip=True) if desc else '', 'image':im.get('src') if im else None,'slug':slug(heading.get_text(' ',strip=True)),'data':{'copy':{},'images':{},'category':card.get('data-category',card.get('data-item-category',''))},'school':card.get('data-level',card.get('data-category')) if card.get('data-level',card.get('data-category')) in ['sd','smp','sma'] else None}
    if model=='Achievement':record['data'].update(year=2025,competition=record['title'],student_name=card.find_all('p')[-2].get_text(' ',strip=True),rank=card.find('span').get_text(' ',strip=True))
    if model=='News':record['data']['author']=card.find_all('span')[-2].get_text(' ',strip=True)
    if model=='Gallery':record['data']['images']=[record['image']];record['data']['date']='2026-02-14'
    heading.clear();heading.append(NavigableString('{{ $item->title }}'))
    if desc:desc.clear();desc.append(NavigableString('{{ $item->description }}'))
    if im:im['src']='{{ $item->image_url }}';im['alt']='{{ $item->title }}'
    for a in card.find_all('a'):a['href']='{{ $item->public_url }}'
    # Preserve accessible navigation even for cards without a prototype link.
    heading.wrap(soup.new_tag('a',href='{{ $item->public_url }}'))
    saved_image=im.extract() if im else None
    gallery_images=record['data'].get('images',[])
    record['data']['images']={}
    bind(card,'$item',record['data'])
    if saved_image:card.find('div').insert(0,saved_image)
    if model=='Gallery':record['data']['photos']=gallery_images
    if template is None:template=str(card)
    records.append(record)
   parent=cards[0].parent
   for card in cards:card.decompose()
   parent.append(NavigableString('@foreach($items as $item)\n<x-'+page+'-card :item="$item" />\n@endforeach'))
   parent['id']='koleksi'
   parent.insert_before(NavigableString('<x-content-filters :categories="$categories" />'))
   parent.insert_after(NavigableString('<div class="my-8">{{ $items->withQueryString()->links() }}</div>'))
   (dest/'components'/f'{page}-card.blade.php').write_text('@props([\'item\'])\n'+html.unescape(template))
   entities[model]=records
 # Remove prototype filters now replaced with real server filters.
 for el in main.select('#category-filter-group,#article-search-input,#level-filter-bar,.facility-filter-btn,.gallery-filter-btn,[data-filter-type],.year-btn'):
  el.decompose()
 bind(main,'$page',data)
 # Hero must load eagerly.
 first=main.find('img')
 if first:first['loading']='eager';first['fetchpriority']='high'
 body=html.unescape(str(main))
 (dest/'pages'/f'{page}.blade.php').write_text("@extends('layouts.public')\n@section('content')\n"+body+"\n@endsection\n")
 seeds.append({'title':title,'slug':page,'description':title,'data':data,'school':page if page in ['sd','smp','sma'] else None})
 # Common chrome from home/editorial retained as a reference for component translation.
 if page in ['home','achievements']:
  for el in ['header','footer']:
   tag=soup.find(el)
   if tag:Path('reference/'+page+'-'+el+'.html').write_text(str(tag))
Path('database/seeders/data/pages.json').write_text(json.dumps(seeds,ensure_ascii=False,indent=2))
Path('database/seeders/data/entities.json').write_text(json.dumps(entities,ensure_ascii=False,indent=2))
# Tailwind theme from actual HTML exports; classes are preserved.
merged={}
for cfg in configs:
 for k,v in cfg.items():merged.setdefault(k,{}).update(v)
merged['colors'].update({'forest':{'DEFAULT':'#174C3C','dark':'#10382D','deep':'#0D2D24','surface':'#205E4C','light':'#EBF4F0','ink':'#0D3326','night':'#081D16'},'cream':{'DEFAULT':'#FAF9F5','soft':'#F4F2EB','muted':'#ECE9DF'},'lime':{'DEFAULT':'#C4DC75','accent':'#B5D35D','light':'#EAF3D3'},'sage':{'DEFAULT':'#E5EFE7','border':'#D2E3D6'},'peach':'#FFDBCA','peach-ink':'#4E1F00','peach-border':'#E37630'})
merged['fontFamily'].update({'serif':['Newsreader','Georgia','serif'],'sans':['Manrope','sans-serif'],'handwriting':['Caveat','cursive'],'symbols':['Material Symbols Outlined']})
merged.pop('borderRadius',None)
Path('tailwind.config.js').write_text('export default '+json.dumps({'theme':{'extend':merged}},indent=2)+';\n')
Path('resources/css/app.css').write_text('''@import 'tailwindcss';
@config '../../tailwind.config.js';
@plugin '@tailwindcss/forms';
@source '../views';
@source '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php';
/* Alpine hides uninitialized dialogs before JavaScript starts. */
[x-cloak] { display: none !important; }
''')
print('Translated',len(seeds),'pages;', {k:len(v) for k,v in entities.items()})
