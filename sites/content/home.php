<section id="about">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold">Naplónak indult.</h2>
                <h3 class="fw-bold">Bemutató bloggá vált.</h3><br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 align-content-center">
                            <p>Aztán átalakult valami mássá. Ablakká, amelyben kitekintek a világra, a világ meg betekinthet a gondolataimba: késekről, every day carry felszerelésekről, és az ezek mögött meghúzódó filozófiáról.</p>
                            <p>Aztán ennél is több lett. Egy közösség, amelyben együtt, hasonló értékek mentén dolgozunk azért, hogy egy minőségi, kissé talán régimódi találkahely legyen ez az online térben.</p>
                            <p><strong>Balogh József</strong> vagyok, és azon dolgozom, hogy ez a közösség egyre nagyobbá váljon, és együtt adhassuk tovább ezek az értékeket. Tarts velünk te is!</p>
                        </div>
                        <div class="col-md-5">
                            <img  class="img-fluid rounded"  style="object-fit: cover;" src="./media/images/blog_images/IMG_20180614_163340_1.jpg.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Caorusel -->
<section>
    <div class="container px-4 ">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <div id="carouselExampleCaptions" class="carousel slide rounded">
                    <div class="carousel-indicators">
                        <?php
                        $numSlides = 11;
                        for ($i = 0; $i < $numSlides; $i++) {
                            $isActive = ($i === 0) ? 'class="active" aria-current="true"' : '';
                            echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $i . '" ' . $isActive . ' aria-label="Slide ' . ($i + 1) . '"></button>';
                        }
                        ?>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./media/images/blog_images/20241129_1351055722-980x735.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                                <h2 class="bg-dark bg-opacity-50 py-2 px-4 fw-bold">EDC ajándékötletek karácsonyra – 2024</h2>
                                <h6 class="bg-dark bg-opacity-50 py-2 px-4">Szerző: VaszilijEDC Ultra | 2024. dec. 1. | Egyéb</h6>
                                <p class="bg-dark bg-opacity-50 py-2 px-4 text-justify">Közeledik a karácsony, és ezzel elkezdődik a „Mi a fenét vegyünk Bélának?” jellegű dilemmák időszaka. Elvileg kést nem illik ajándékozni, mivel „elvágja a barátság fonalát”, ám mi, a VaszilijEDC Ultras tagjai a saját példánkon keresztül tudjuk bizonyítani ennek az...</p>
                                <a href="https://vaszilijedc.hu/edc-ajandekotletek-karacsonyra-2024/" class="btn btn-light px-4 py-2 rounded-0">Bővebben</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./media/images/blog_images/Kep1.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                                <h2 class="bg-dark bg-opacity-50 py-2 px-4 fw-bold">Condor Nessmuk</h2>
                                <h6 class="bg-dark bg-opacity-50 py-2 px-4">Szerző: VaszilijEDC Ultra | 2024. nov. 17. | Egyéb</h6>
                                <p class="bg-dark bg-opacity-50 py-2 px-4 text-justify">Valami megmagyarázhatatlan oknál fogva betegesen vonzódom a nessmuk késekhez. Mindegy milyen Nessmuk, nekem bejön. Lehet kovácsoltvas, korhű, modern taktikai, kicsi, nagy, bicska vagy fix, nekem mind tetszik. Egy kis Nessmuk történelem: A Nessmuk kés vagy forma George...</p>
                                <a href="https://vaszilijedc.hu/condor-nessmuk/" class="btn btn-light px-4 py-2 rounded-0">Bővebben</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./media/images/blog_images/kackias_bajusz1_resized_1200x-980x430.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0 ">
                                <h2 class="bg-dark bg-opacity-50 py-2 px-4 fw-bold">„Pimp your knife."”</h2>
                                <h6 class="bg-dark bg-opacity-50 py-2 px-4">Szerző: VaszilijEDC Ultra | 2024. nov. 3. | Egyéb</h6>
                                <p class="bg-dark bg-opacity-50 py-2 px-4 text-justify">Avagy cicomázzad a bökődet.Az angol cím és a szándékosan magyarkodó alcím párosa bár erőltetett, de mégis visszaadja a téma körüli kettősséget. „A pimp” kifejezésnek nem igazán van magyar megfelelője, jellemzően késes fórumokon is a „pimpelés” kifejezéssel...</p>
                                <a href="https://vaszilijedc.hu/pimp-your-knife/" class="btn btn-dark px-4 py-2 rounded-0">Bővebben</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./media/images/blog_images/IMG_0634.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                                <h2 class="bg-dark bg-opacity-50 py-2 px-4 fw-bold">Első feladat</h2>
                                <h6 class="bg-dark bg-opacity-50 py-2 px-4">Szerző: VaszilijEDC Ultra | 2024. okt. 20. | Egyéb</h6>
                                <p class="bg-dark bg-opacity-50 py-2 px-4 text-justify">Első feladat Milyen cím ez egy évek óta sikeres blog oldalán? Elég fura, elismerem. Viszont ha azt mondom, hogy ez egy kés neve, segítettem a megoldásban? Valószínűleg még inkább zavart keltek az olvasóban...De amennyiben így hallja: Kizer T1?...</p>
                                <a href="https://vaszilijedc.hu/elso-feladat/" class="btn btn-light px-4 py-2 rounded-0">Bővebben</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./media/images/blog_images/IMG_20240928_174413-scaled.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                                <h2 class="bg-dark bg-opacity-50 py-2 px-4 fw-bold">Mora Classic no. 1/0 – Időtlen vagy idétlen klasszikus?</h2>
                                <h6 class="bg-dark bg-opacity-50 py-2 px-4">Szerző: VaszilijEDC Ultra | 2024. okt. 6. | Egyéb</h6>
                                <p class="bg-dark bg-opacity-50 py-2 px-4 text-justify">Ha valaki beleugrik a késes hobbiba, valószínűleg előbb vagy utóbb valamilyen formában találkozni fog a svéd Morakniv cég  Classic névre keresztelt sorozatával. Az emblematikus vörösre pácolt nyírfa markolattal ellátott, szénacél pengés, markolattüskés, skandi...</p>
                                <a href="https://vaszilijedc.hu/mora-classic-no-1-0-idotlen-vagy-idetlen-klasszikus/" class="btn btn-dark px-4 py-2 rounded-0">Bővebben</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./media/images/blog_images/Kep2.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                                <h2 class="bg-dark bg-opacity-50 py-2 px-4 fw-bold">A kés amit nem akartam megvenni.<br>Giantmouse Ace Clyde</h2>
                                <h6 class="bg-dark bg-opacity-50 py-2 px-4">Szerző: VaszilijEDC Ultra | 2024. szept. 22. | Egyéb</h6>
                                <p class="bg-dark bg-opacity-50 py-2 px-4 text-justify">A Giantmouse Ace Clyde nem fogott meg elsőre. Valahogy nem illett a Giantmouse többi modellje közé. Egy éltárs egér családjának a költözésekor került hozzám a Clyde.<br>Gondoltam adok neki egy esélyt és ha mégsem alakul ki a kémia akkor kis bukóval felteszem eladásra...</p>
                                <a href="https://vaszilijedc.hu/a-kes-amit-nem-akartam-megvenni-giantmouse-ace-clyde/" class="btn btn-light px-4 py-2 rounded-0">Bővebben</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./media/images/blog_images/IMG_1799-980x653.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                                <h2 class="bg-dark bg-opacity-50 py-2 px-4 fw-bold">Spyderco SpydieChef</h2>
                                <h6 class="bg-dark bg-opacity-50 py-2 px-4">Szerző: VaszilijEDC Ultra | 2024. szept. 1. | Egyéb</h6>
                                <p class="bg-dark bg-opacity-50 py-2 px-4 text-justify">Oszd meg és uralkodj Spyderco SpydieChef. Van, aki zsigeri ellenszenvet érez, van, aki ódákat zeng róla. Egy biztos, hidegen senkit sem hagy. Mivel régóta használok egyet magam is, megosztom veletek az évek során szerzett tapasztalataimat. Igyekszem...</p>
                                <a href="https://vaszilijedc.hu/spyderco-spydiechef/" class="btn btn-dark px-4 py-2 rounded-0">Bővebben</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./media/images/blog_images/ha-nincs-lo-jo-a-szamar-is.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                                <h2 class="bg-dark bg-opacity-50 py-2 px-4 fw-bold">Ha nincs ló jó a szamár is</h2>
                                <h6 class="bg-dark bg-opacity-50 py-2 px-4">Szerző: VaszilijEDC Ultra | 2024. aug. 18. | Egyéb</h6>
                                <p class="bg-dark bg-opacity-50 py-2 px-4 text-justify">Helyettesítő vagy helyettesíthető vasaink, avagy ha nincs ló, jó a szamár is!?Vannak kések, bicskák, amiket nem tudunk vagy nem akarunk megvenni különböző okok miatt. Hála a fogyasztói társadalom igényének, a gyártók bőven biztosítanak számunkra más alternatívákat....</p>
                                <a href="https://vaszilijedc.hu/ha-nincs-lo-jo-a-szamar-is/" class="btn btn-light px-4 py-2 rounded-0">Bővebben</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./media/images/blog_images/IMG_20240727_084951-980x1307.webp" class="d-block w-100 img-rounded" alt="...">
                            <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                                <h2 class="bg-dark bg-opacity-50 py-2 px-4 fw-bold">A minimál EDC megoldások lehetséges útjai</h2>
                                <h6 class="bg-dark bg-opacity-50 py-2 px-4">Szerző: VaszilijEDC Ultra | 2024. aug. 4. | Egyéb</h6>
                                <p class="bg-dark bg-opacity-50 py-2 px-4 text-justify">Nemrégiben olvastam el Cait Flanders A kevesebb több című könyvét, ami a mindennapi életben alkalmazható minimalizmusról szól. A kanadai blogger-írónő megelégelte a folyamatos, impulzusszerű vásárlási rohamait, és megfogadta, hogy egy évig nem vásárol semmit, ami nem...</p>
                                <a href="https://vaszilijedc.hu/a-minimal-edc-megoldasok-lehetseges-utjai/" class="btn btn-dark px-4 py-2 rounded-0">Bővebben</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./media/images/blog_images/451581914_1246822210032867_2328475126898635683_n.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                                <h2 class="bg-dark bg-opacity-50 py-2 px-4 fw-bold">Tények és tévhitek a késacélok kapcsán</h2>
                                <h6 class="bg-dark bg-opacity-50 py-2 px-4">Szerző: VaszilijEDC Ultra | 2024. júl. 21. | Egyéb</h6>
                                <p class="bg-dark bg-opacity-50 py-2 px-4">Tények és tévhitek a késacélok kapcsán „Nagyobb is lehetne, ámbár a vasát acélnak nézem.” – véleményezte Tutajos bicskáját Matula bácsi Fekete István Tüskevár című ifjúsági regényében. Ez a mondat már gyerekként szöget ütött a fejembe, hogy akkor most ez hogyan is...</p>
                                <a href="https://vaszilijedc.hu/tenyek-es-tevhitek-a-kesacelok-kapcsan/" class="btn btn-light px-4 py-2 rounded-0">Bővebben</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./media/images/blog_images/att.BeLa88X1Dk-aBqH27S7njTCHUNpWDz92mFkbN7-JDDQ-980x654.jpg.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                                <h2 class="bg-dark bg-opacity-50 py-2 px-4 fw-bold">Hogue Deka</h2>
                                <h6 class="bg-dark bg-opacity-50 py-2 px-4">Szerző: VaszilijEDC Ultra | 2024. júl. 7. | Egyéb</h6>
                                <p class="bg-dark bg-opacity-50 py-2 px-4">Lehet egy Dekával több? Hogue Deka - egy sikertörténet az amerikai gyártó palettáján. Könnyű, erős, kétkezes, szuper acél. Elég ennyi egy jó EDC késnek? Nemsokára kiderül.Mivel van a gyűjteményemben két Deka is, ez az írás a MagnaCut acéllal...</p>
                                <a href="https://vaszilijedc.hu/hogue-deka/" class="btn btn-dark px-4 py-2 rounded-0">Bővebben</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Services section-->
<section id="services">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold">De mi az az <strong>EDC</strong>?</h2>
                <div class="container">
                    <div class="row">
                        <!-- Image on the left -->
                        <div class="col-md-5">
                            <img class="img-fluid rounded" src="./media/images/blog_images/IMG_20200614_143419-01.jpeg.webp" alt="">
                        </div>
                        <!-- Text on the right -->
                        <div class="col-md-7">
                            <p>Egy angol betűszó, amely kibontva az every day carry kifejezést takarja. Ez szó szerinti fordításban azokat a holmikat jelenti, amelyeket nap mint nap magunknál hordunk. A közkeletű tévhittel ellentétben nem szükséges az, hogy mindig minden nap nálunk legyen: inkább egyfajta készletről, gyűjteményről van szó, amelynek elemeit az adott szituációnak megfelelően váltogathatjuk. Más holmikat pakolunk el, ha egy irodába megyünk dolgozni, mást, ha egy építkezésen melózunk, és akkor is, amikor hétvégén rokonlátogatóba megyünk.</p>
                            <p>Ezen a blogon főképp késekről olvashatsz, mert hozzám ezek az eszközök állnak legközelebb, de szó esik néha másról is. Multiszerszámokról, táskákról, egyéb kiegészítőkről. És nem csak bemutatókat készítek: ahogy már írtam, sokféle aspektusa érdekel ennek a világnak.</p>
                            <p>Az every day carry tehát sok minden lehet. Életmód, filozófia, hobbi, vagy akár egy gyűjtőszenvedély alapja. Mindegy, hogy téged melyik része érdekel, remélem, találsz itt értékes olvasnivalót.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container px-4">
        <div class="row g-4 justify-content-center">
            <!-- Facebook Card -->
            <div class="col-md-4">
                <div class="info-card info-card-facebook">
                    <h3>Facebook</h3>
                    <p>Vaszilij EDC a Facebookon.</p>
                    <a href="https://www.facebook.com/VaszilijEdc" class="btn btn-outline-light">Megnézem</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card info-card-community">
                    <h3>Közösség</h3>
                    <p>Ahol te adod a tartalmat.</p>
                    <a href="https://www.facebook.com/groups/434204628313605" class="btn btn-outline-light">Megnézem</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card">
                    <h3>Üzenet</h3>
                    <p>Küldj üzenetet nekem!</p>
                    <a href="?oldal=contact_form" class="btn btn-outline-light">Megnézem</a>
                </div>
            </div>
</section>
<!-- Contact section-->
<section id="contact" class="bg-light">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <div class="brand-section">
                    <div class="brand-info">
                        <h3 class="brand-header">Bladeshop</h3>
                        <p>Késes webshop gyakori akciókkal és vevőbarát hozzáállással. <br>Ha új kés kell, ne hagyd ki!</p>
                        <a href="https://www.bladeshop.hu/" class="btn btn-outline-dark">Megnézem</a>
                    </div>
                    <div class="brand-logo">
                        <img src="./media/images/blog_images/29366421_1622414891184377_7218577531824242688_n.jpg.webp" alt="Bladeshop Logo">
                    </div>
                </div>

                <!-- Elemlámpa Blog -->
                <div class="brand-section">
                    <div class="brand-info">
                        <h3 class="brand-header">Elemlámpa Blog</h3>
                        <p>Minden, amit az elemlámpákról tudni szeretnél.<br>Cikkek, bemutatók, illetve kuponok gyűjtőhelye.</p>
                        <a href="https://elemlampablog.hu/" class="btn btn-outline-dark">Megnézem</a>
                    </div>
                    <div class="brand-logo">
                        <img src="./media/images/blog_images/162854478_131232062335812_8008164456523881828_n.jpg.webp" alt="Elemlámpa Blog Logo">
                    </div>
                </div>

                <!-- Késvilág -->
                <div class="brand-section">
                    <div class="brand-info">
                        <h3 class="brand-header">Késvilág</h3>
                        <p>Hazai bolt és webáruház, rendkívül széles termékválasztékkal.<br> Debrecenben személyesen is válogathatsz!</p>
                        <a href="https://www.kesvilag.hu/" class="btn btn-outline-dark">Megnézem</a>
                    </div>
                    <div class="brand-logo">
                        <img src="./media/images/blog_images/Kesvilag.jpg.webp" alt="Késvilág Logo">
                    </div>
                </div>

                <!-- Magyar kések -->
                <div class="brand-section">
                    <div class="brand-info">
                        <h3 class="brand-header">Magyar kések</h3>
                        <p>Webshop és közösség.<br>Elsősorban a hazai készítők termékeivel foglalkozik,<br> de nyitott egyéb irányokba is.</p>
                        <a href="https://www.magyarkesek.hu/" class="btn btn-outline-dark">Megnézem</a>
                    </div>
                    <div class="brand-logo">
                        <img src="./media/images/blog_images/mkszoveglogo.png.webp" alt="Magyar kések Logo">
                    </div>
                </div>

                <!-- Késportál -->
                <div class="brand-section">
                    <div class="brand-info">
                        <h3 class="brand-header">Késportál</h3>
                        <p>Magyarország legnagyobb késes tudásbázisa.<br>Érdemes csatlakoznod a <a href="http://forum.kesportal.hu/" id="kesportal-forum" title="Link a fórumhoz">fórumhoz</a> is!</p>
                        <a href="https://kesportal.hu/" class="btn btn-outline-dark">Megnézem</a>
                    </div>
                    <div class="brand-logo">
                        <img src="./media/images/blog_images/993918_421456207969831_2037177305_n.jpg.webp" alt="Késportál Logo">
                    </div>
                </div>

                <!-- ZBOSS -->
                <div class="brand-section">
                    <div class="brand-info">
                        <h3 class="brand-header" >ZBOSS</h3>
                        <p>Kések, EDC felszerelések, túra és sok egyéb.<br>Hazai webáruház, ahol a vevők elégedettsége a legfontosabb.</p>
                        <a href="https://www.zboss.hu/" class="btn btn-outline-dark">Megnézem</a>
                    </div>
                    <div class="brand-logo">
                        <img src="./media/images/blog_images/ZBOSSweb_fekete_hatterrel-kicsi.jpg.webp" alt="ZBOSS Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>