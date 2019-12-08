<?php
    $topic = 'css';
    include('includes/header.php');
?>

<h1>Die Sprache CSS3 im Detail</h1>
                <hr>
                <br>
                <p class="beschreibung">
                    <img id="chapter-logo" src="v02b-data/css3-logo.png" alt="CSS3 Logo" width="15%" /> CSS3 wird
                    benutzt um HTML-Dokumente zu stylen. Dieses Skript soll Ihnen die Grundlagen der Benutzung von CSS3
                    beibringen. Die Abkürzung CSS steht für
                    Cascading Style Sheets, damit steckt der wichtigste Teil von CSS, die Kaskadierung schon im Namen.
                    <br>
                </p>
                <a id="skriptlink" href="v02b-data/CSS3 im Detail.pdf" target="_blank">→ CSS3 im Detail ←</a>
                <p class="author">
                    Autor: Matthes Würbs
                </p>
                <br><br>
                <div class="leseprobe">
                    <div class="center-paragraph">
                        <h3 id="grundlagen">1 Grundlagen</h3>
                    </div>
                    <div class="einfuehrung clearfix">
                        <p>
                            Ziel dieses Kapitels ist es, Sie mit den Grundlagen von CSS vertraut zu machen. Nach diesem
                            Kapitel sollten Sie in der Lage sein,
                        </p>
                        <ul>
                            <li>den Nutzen von CSS zu sehen</li>
                            <li>Responsives Webdesign zu verstehen</li>
                            <li>CSS in ein HTML-Dokument einzubinden</li>
                            <li>Farben und Maßangaben zu benutzen</li>
                            <li>Kaskadierung zu verstehen</li>
                        </ul>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="was-ist-css" class="hider"><i class="pfeil-d"></i>1.1 Was ist CSS?</h4>
                        <p>
                            CSS, kurz für Cascading Style Sheets, ist eine Sprache, um HTML-Seiten gestalterisch zu
                            bearbeiten. Die Hauptidee hinter CSS war, Inhalte von Gestaltung zu trennen. Der Vorteil
                            hiervon liegt darin, das Stylesheet nur einmal schreiben zu müssen und es trotzdem auf
                            verschiedene HTML-Dokumente anwenden zu können. Es erlaubt die Anpassung von allen möglichen
                            inhaltlichen Elementen wie Farben, Layout oder Text. Die Dateiendung von CSS-Dateien lautet
                            .css.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="responsives-webdesign" class="hider"><i class="pfeil-d"></i>1.2 Responsives Webdesign
                        </h4>
                        <div>
                            <figure id="abb1-1">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e2/Responsive_Web_Design.png"
                                    alt="Responsive Webdesign" width="100%" />
                                <figcaption>Abb. 1.1: Responsives Webdesign</figcaption>
                            </figure>
                            <p>
                                Das Responsive Webdesign ist eine Vorgehensweise beim Designen von Websites. Nach dieser
                                Vorgehensweise ist es das Ziel, „Websites flexibel und reaktionsfähig zu gestalten.“
                                [Zil12,
                                S.8] Dabei wird nicht nur die Ausrichtung der verschiedenen Endgeräte beachtet, die in
                                Abb.
                                1.1 exemplarisch dargestellt werden, sondern auch die Auflösung und Eingabemöglichkeiten
                                dieser. Um dies zu vereinfachen, bietet CSS verschiedene Möglichkeiten. Beispielsweise
                                kann
                                man für verschiedene Endgeräte verschiedene Stylesheets erstellen, welche dasselbe
                                HTML-Dokument stylen. Mehr dazu im Punkt „Einbinden von CSS“. Außerdem gibt es in CSS
                                verschiedene skalierbare Maßeinheiten, welche das Anpassen an verschieden
                                Bildschirmgrößen
                                vereinfachen.
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="kaskadierung" class="hider"><i class="pfeil-d"></i>1.3 Kaskadierung</h4>
                        <figure id="abb1-2">
                            <img src="v02b-data/Abb1.2.png" width="100%" alt="Ein Beispiel" />
                            <figcaption>Abb. 1.2: Der weiter unten definierte Wert wird angenommen</figcaption>
                        </figure>
                        <p>
                            Grundsätzlich bezeichnet Kaskadierung das Aneinanderreihen verschiedener Elemente. Im Fall
                            von CSS funktioniert Kaskadierung so, dass jeder Regel eine bestimmte Wichtigkeit zugeordnet
                            wird. Die Regel, welche für ein Element die Höchste Wichtigkeit hat, bestimmt den Stil für
                            dieses Element, vgl. [BB16, S29]. Sind zwei Regeln gleich wichtig, wird der Stil der Regel
                            angewendet, die später festgelegt wird, wie in Abb. 1.2 dargelegt. Auch der Browser des
                            Nutzers hat (sehr grundlegende) Regeln, diese sind jedoch am wenigstens wichtig, vgl. [HB11,
                            S.81]
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="vorbereitung" class="hider"><i class="pfeil-d"></i>1.4 Vorbereitung im HTML-Code</h4>
                        <p>
                            Grundsätzlich kann man für jedes HTML-Element einen Style angeben. Da dies jedoch nur sehr
                            grobes Styling ermöglicht, sollte man seinen HTML-Code mit verschiedenen HTML-Tags
                            strukturieren, um diesen genauer stylen zu können. Will man einen kompletten Block stylen,
                            bietet sich beispielsweise der <span class="code">&ltdiv>...&lt/div></span> Tag an, falls es
                            sich nur um einen Abschnitt
                            in einem Paragraph (<span class="code">&ltp>...&lt/p></span>) handelt, kann man diesen mit
                            <span class="code">&ltspan>...&lt/span></span> umschließen.
                            Um verschiedene Tags der gleichen Art unterscheiden zu können, kann man ihnen mit dem
                            class=““-Attribut eine Klasse zuteilen, oder man teilt ihnen mit dem id=““-Attribut einen
                            eindeutigen Identifikator zu. Letzteres sollte man nur machen, wenn man nur genau ein
                            Element stylen will. Hat man mehrere Elemente, die man gleich stylen will, sollte man ihnen
                            dieselbe Klasse zuweisen.
                            IDs und Klassennamen können nicht mit Zahlen beginnen, diese aber enthalten. Mehrere Wörter
                            sollten durch Bindestriche getrennt werden, camelCase ist nicht angebracht. Will man eine
                            Variation eines Elements oder einer Klasse benennen, bieten sich zwei Bindestriche an (zB
                            <span class="code">btn—warning</span>), für Kinder eines Elements zwei Unterstrichte (zB
                            <span class="code">btn__text</span>)
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="einbinden" class="hider"><i class="pfeil-d"></i>1.5 Einbinden von CSS</h4>
                        <p>
                            Um CSS in ein HTML-Dokument einzubinden, gibt es mehrere Möglichkeiten. Am direktesten ist
                            es, das style=““-Attribut zu benutzen, welches man auf die meisten HTML-Tags anwenden kann.
                            Der so genannte „<strong>Inline-Style</strong>“ hat die größte Gewichtung, überschreibt also
                            alle anderen
                            Stylevorgaben, jedoch ist diese Art des Stylings zu vermeiden da man nur ein einziges
                            Element (und eventuelle Kinder) per style-Attribut stylen kann. Somit müsste man das für
                            jedes andere Element in jedem anderem Dokument wiederholen. Außerdem erschwert es die
                            Lesbarkeit deutlich, da man die Stylevorgaben nicht zentral an einem Platz hat.
                            Die nächste Möglichkeit ist, den <span class="code">&ltstyle></span>
                            ...
                            <span class="code">&lt/style></span> Tag im Header der HTML-Datei zu benutzen dies
                            vereinfacht die Lesbarkeit zwar
                            extrem, jedoch muss man den Tag trotzdem für jede Datei, welche auf diese Art gestyled
                            werden soll, anlegen. Somit eignet sich diese Methode für Websites mit mehreren
                            HTML-Dokumenten ebenfalls nicht.
                            Vorzugsweise nutzt man also diese Methode: Das Einbinden eines Stylesheets im HTML-Header.
                            Dies erlaubt es nicht nur, dasselbe Sheet für verschiedene Dokumente zu nutzen, man kann
                            sogar verschiedene Stylesheets für verschiedene Endgeräte nutzen. Hierfür nutzt man das
                            Standalone Tag
                            <span class="code">&ltlink /></span>. In diesem Tag setzt man mit dem Attribut rel=““ die
                            Beziehung, man schreibt also
                            <span class="code">rel=“stylesheet“</span>. Zusätzlich benötigt wird auch der href=““-Tag,
                            dem man den Link des
                            gewünschten Stylesheets übergibt, beispielsweise <span
                                class="code">href=“/stylesheet.css“</span>. Neben diesen beiden
                            Pflicht-Attributen gibt es noch das media=““ und das title=““-Attribut. Mit dem
                            media=““-Attribut lassen sich verschieden Styles für verschiedene Endgeräte festlegen:
                            <br>
                            <span class="code">&ltlink rel="stylesheet" href="smartphone.css" media=“handheld“ /></span>
                            <br>
                            <span class="code">&ltlink rel="stylesheet" href="desktop.css" media=“screen“ /></span>
                            <br>
                            Verschiedene media=““-Werte sind zum Beispiel screen (Standartwert, für normale
                            Computerbildschirme), handheld (für PDAs und Smartphones) oder print (für die Druckversion
                            der Seite). Das title=““-Attribut erlaubt es, verschiedene Styles für die gleiche Seite auf
                            dem gleichen Medium anzulegen. Die so definierten Styles lassen sich im Browser wechseln,
                            auf Firefox beispielsweise mit einem Klick auf Ansicht > Webseiten-Stil.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="farben" class="hider"><i class="pfeil-d"></i>1.6 Farben</h4>
                        <div>
                            <p>
                                Mittels CSS lassen sich HTML-Elemente einfärben. Die gewünschte Farbe kann man auf
                                verschiedenen Wegen definieren. Der einfachste Weg sind Namen. Für viele vordefinierte
                                Farben wurden Namen vergeben, die man einfach und ohne Anführungszeichen angeben kann.
                                Beispiele hierfür sind „simple“ Farben wie „Red“, „Blue“ oder „Green“, es gibt aber auch
                                „verstecktere“ Farbnamen wie „GoldenRod“, oder „DarkSeaGreen“, vgl [BB16, S.102].
                                Zusätzlich zu den Namen kann man unter anderem auch noch Hex-Farben, RGB-Farben und
                                HSL-Farben angeben. Anschließend folgt eine Tabelle, welche oben benannte Werte in den
                                verschiedenen Schreibweisen vergleicht.
                            </p>
                            <table id="tab1-1">
                                <caption>Tab. 1.1: Vergleicher verschiedener Farben und Schreibweisen</caption>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Hex-Wert</th>
                                        <th>RGB-Wert</th>
                                        <th class="hide">HSL-Wert</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="red">
                                        <td>Red</td>
                                        <td>#ff0000</td>
                                        <td>rgb(255,0,0)</td>
                                        <td class="hide">hsl(0, 100%, 50%)</td>
                                    </tr>
                                    <tr id="blue">
                                        <td>Blue</td>
                                        <td>#0000ff</td>
                                        <td>rgb(0,0,255)</td>
                                        <td class="hide">hsl(240, 100%, 50%)</td>
                                    </tr>
                                    <tr id="green">
                                        <td>Green</td>
                                        <td>#00ff00</td>
                                        <td>rgb(0,255,0)</td>
                                        <td class="hide">hsl(120, 100%, 50%)</td>
                                    </tr>
                                    <tr id="goldenrod">
                                        <td>GoldenRod</td>
                                        <td>#DAA520</td>
                                        <td>rgb(218,165,32)</td>
                                        <td class="hide">hsl(43, 74%, 49%)</td>
                                    </tr>
                                    <tr id="darkseagreen">
                                        <td>DarkSeaGreen</td>
                                        <td>#8fbc8f</td>
                                        <td>rgb(143,188,143)</td>
                                        <td class="hide">hsl(120, 25%, 65%)</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>Grundsätzlich kann man die Farbnamen auch alle klein schreiben. </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="massangaben" class="hider"><i class="pfeil-d"></i>1.7 Maßangaben</h4>
                        <div>
                            <p>
                                Wie oben schon erwähnt, gibt es in CSS Maßangaben, um Abstände, Größen und Ähnliches
                                festzulegen. In CSS wird unterschieden zwischen <strong>relativen</strong> Längen und
                                <strong>absoluten</strong> Längen.
                            </p>
                            <table>
                                <caption>Tab. 1.2: Relative Längeneinheiten</caption>
                                <thead>
                                    <tr>
                                        <th>Einheit</th>
                                        <th>Beschreibung</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>em</td>
                                        <td>Abhängig von der Höhe der gewählten Schriftart. Orientiert sich am großen
                                            „M“</td>
                                    </tr>
                                    <tr>
                                        <td>ex</td>
                                        <td>Abhängig von der Höhe der gewählten Schriftart. Orientiert sich am kleinen
                                            „x“</td>
                                    </tr>
                                    <tr>
                                        <td>ch</td>
                                        <td>Abhängig von der Breite der Null „0“</td>
                                    </tr>
                                    <tr>
                                        <td>vw</td>
                                        <td>1% von der Breite des Browser Fensters</td>
                                    </tr>
                                    <tr>
                                        <td>vh</td>
                                        <td>1% von der Höhe des Browser Fensters</td>
                                    </tr>
                                    <tr>
                                        <td>vmin</td>
                                        <td>1% von der kleineren Größe des Fensters</td>
                                    </tr>
                                    <tr>
                                        <td>vmax</td>
                                        <td>1% von der größeren Größe des Fensters</td>
                                    </tr>
                                    <tr>
                                        <td>%</td>
                                        <td>Angabe in Prozent des Übergeordneten Elements</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>„Relative Maßeinheiten eignen sich für die Bildschirmdarstellung besser als absolute
                                Einheiten, da sie skalierbar sind“ [HB11, S86]. Eine Ausnahme bildet die px-Einheit,
                                diese bietet sich gut am, um dünne Grenzlinien zu definieren. Wenn die Größe des
                                Ausgabemediums bekannt ist, bieten sich absolute Längeneinheiten an, da sich die
                                Abstände so genauer festlegen lassen. Wenn man beispielsweise ein Stylesheet für eine
                                Druckversion einer Seite anlegt, weiß man, wie groß das Papier ist und kann hervorragend
                                absolute Einheiten nutzen. </p>
                            <table>
                                <caption>Tab. 1.3: Absolute Längeneinheiten</caption>
                                <thead>
                                    <tr>
                                        <th>Einheit</th>
                                        <th>Beschreibung</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>cm</td>
                                        <td>Abhängig von der Höhe der gewählten Schriftart. Orientiert sich am großen
                                            „M“</td>
                                    </tr>
                                    <tr>
                                        <td>mm</td>
                                        <td>Abhängig von der Höhe der gewählten Schriftart. Orientiert sich am kleinen
                                            „x“</td>
                                    </tr>
                                    <tr>
                                        <td>in</td>
                                        <td>Inch</td>
                                    </tr>
                                    <tr>
                                        <td>px</td>
                                        <td>Pixel, abhängig vom Gerät. Low-DPI: 1px ist ein Pixel des Displays. Drucker
                                            und hochauflösende Bildschirme: 1px sind mehrere Display Pixel</td>
                                    </tr>
                                    <tr>
                                        <td>pt</td>
                                        <td>Point</td>
                                    </tr>
                                    <tr>
                                        <td>pc</td>
                                        <td>Pica</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="zusammenfassung-1" class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                        <p>
                            In diesem Kapitel wurde erklärt, was CSS ist und warum man es benutzen sollte. Außerdem
                            wurde beschrieben, wie man sein HTML-Dokument auf Styling mittels CSS vorbereiten kann und
                            wie man CSS in sein Dokument einbindet.<br>
                            Abschließend wurden noch grundlegende Einheiten von CSS definiert und erklärt, wann und wie
                            sie zu benutzen sind.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="uebungen-1" class="hider"><i class="pfeil-d"></i>Übungen</h4>
                        <p class="uebung">
                            Aufgabe 1<br>
                            Was ist CSS?
                        </p>
                        <p class="uebung">
                            Aufgabe 2<br>
                            Was versteht man unter responsivem Webdesign?
                        </p>

                        <p class="uebung">
                            Aufgabe 3<br>
                            Was macht die Kaskadierung in CSS so nützlich?
                        </p>

                        <p class="uebung">
                            Aufgabe 4<br>
                            Weshalb sollte man auf inline-style verzichten?
                        </p>

                        <p class="uebung">
                            Aufgabe 5<br>
                            Binden Sie das Stylesheet „/handheld.css“ ein, sodass es nur auf Smartphones/PDAs benutzt
                            wird.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h3 id="aufbau">2 Aufbau von CSS-Dokumenten</h3>
                    </div>
                    <p class="einfuehrung">
                        In diesem Kapitel lernen Sie, wie Sie ein CSS-Stylesheet aufbauen und wie sie das gewünschte
                        HTML-Element präzise ansprechen. Außerdem lernen Sie, was man unter CSS-Shorthand versteht
                        und Ihnen werden ein paar grundlegende Eigenschaften von Elementen gezeigt.
                    </p>

                    <div class="center-paragraph">
                        <h4 id="grundgeruest" class="hider"><i class="pfeil-d"></i>2.1 Das Grundgerüst</h4>
                        <div>
                            <p>
                                Ein CSS Stylesheet besteht im Grunde genommen aus drei wiederkehrenden Elementen:
                                <strong>Selektoren</strong>, <strong>Eigenschaften</strong> und <strong>Werte</strong>.
                                Der Selektor wählt aus, welches Element zu stylen ist,
                                die Eigenschaft und der Wert, zusammen <strong>Deklaration</strong> genannt, legen fest,
                                wie sich die
                                entsprechende Eigenschaft äußert. Nach dem Selektor kommen, in geschweiften Klammern
                                eingeschlossen die Regeln, jeweils durch Semikolons getrennt. Diese Kombination
                                bezeichnet
                                man als <strong>Regel</strong>, das Bild unter diesem Abschnitt zeigt eine solche. Von
                                diesen Regeln gibt es
                                mehrere in einem Stylesheet.
                            </p>
                            <figure id="abb2-1">
                                <img src="https://www.w3schools.com/css/selector.gif" width="100%"
                                    alt="Eine CSS-Regel" />
                                <figcaption>Abb. 2.1: Eine simple CSS-Regel</figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="selektoren" class="hider"><i class="pfeil-d"></i>2.2 Selektoren</h4>
                        <div>
                            <p>
                                Mit Hilfe der Selektoren lässt sich ganz genau festlegen, auf welches Element man die
                                Regel
                                anwenden möchte. Man unterscheidet zwischen einfachen Selektoren, kombinierten
                                Selektoren,
                                Pseudoklassen und -element Selektoren sowie Attributsselektoren.
                            </p>
                            <div class="center-paragraph">
                                <h4 id="selektoren-einfach" class="hider"><i class="pfeil-d"></i>2.2.1 Einfache
                                    Selektoren</h4>
                                <p>
                                    Mittels einfachen Selektoren lassen sich Elemente rein nach ihrem Namen, ID, Klasse
                                    oder Typ ansprechen. Dies ist die einfachste Möglichkeit, Elemente auszuwählen,
                                    jedoch braucht sie manchmal mehr Aufwand als beispielsweise kombinierte Selektoren.
                                    Hat man unterschiedliche Elemente, die man gleich stylen will, kann man sie mit
                                    Kommas aneinanderreihen. Eine Klasse spricht man mit einem Punkt vor dem
                                    Klassennamen an, zum Beispiel <span class="code">.my-class</span>. Dadurch werden
                                    alle Elemente mit dem
                                    Attribut <span class="code">class=“my-class“</span> ausgewählt. Will man hingegen
                                    ein einzelnes Element
                                    auswählen, dem man mittels <span class="code">id=“my-id“</span> eine ID gegeben hat,
                                    nutzt man eine Raute vor
                                    der ID, also #my-id</span>. HTML-Tags, wie <span class="code">&ltp></span> oder
                                    <span class="code">&ltdiv></span> spricht man an, indem man die
                                    Klammern weglässt: <span class="code">p, div {[…]}</span> zum Beispiel würde die
                                    Deklarationen auf
                                    alle Paragraphen und Divisions anwenden. Außerdem gibt es noch den
                                    *-Selektor, welcher die Deklaration(en) auf alle Elemente anwendet.
                                </p>
                            </div>
                            <div class="center-paragraph">
                                <h4 id="selektoren-kombiniert" class="hider"><i class="pfeil-d"></i>2.2.2 Kombinierte
                                    Selektoren</h4>
                                <div style="position:relative">
                                    <p>
                                        Kombinierte Selektoren bestehen aus zwei oder mehr Selektoren. Durch sogenannte
                                        <strong>Kombinatoren</strong> werden die Selektoren verbunden. Der
                                        <strong>Nachfahren-Kombinator</strong> besteht
                                        schlichtweg aus einem Leerzeichen und selektiert, wie der Name sagt, jeden
                                        passenden
                                        Nachfahre. So färbt zum Beispiel <span class="code">div p {color: red;}</span>
                                        jeden Paragraphen, welcher sich
                                        in einer Division befindet, gelb ein. Ob sich der der Paragraph dabei in einem
                                        weiteren Block befindet oder nicht, spielt keine Rolle.<br>
                                        Der <strong>Kind-Kombinator</strong> „>“ wählt nur direkte Kinder aus. Nimmt man
                                        obiges Beispiel und
                                        ersetzt den Nachfahren-Kombinator durch den Kind-Kombinator (<span
                                            class="code">div>p {color: red;}</span>),
                                        werden nur direkt unterhalb der Division liegende Paragraphen eingefärbt. Falls
                                        sich
                                        ein Paragraph in einem weiteren Block, bspw. einem Navigations-Block, befinden,
                                        werden diese nicht eingefärbt.<br>
                                        Mit dem <strong>Nachbar-Kombinator</strong> „+“ lässt sich der direkte (untere)
                                        Nachbar eines
                                        Elements wählen, und auch nur, wenn er dem Selektor entspricht. Zu beachten ist,
                                        dass die Elemente sich auf der gleichen Ebene befinden müssen. <span
                                            class="code">div+p {color: red;}</span>
                                        wählt den ersten Paragraph nach jeder Division und färbt den Hintergrund gelb.
                                        Befindet sich ein Element zwischen einer Division und einem Paragraph, wird der
                                        Paragraph nicht eingefärbt!<br>
                                        Der <strong>Geschwister-Kombinator</strong> „~“ hingegen wählt alle folgenden,
                                        zum Selektor
                                        passenden, Elemente aus, die sich auf der gleichen Ebene befinden. Im Beispiel
                                        <span class="code">div~p
                                            {color: red;}</span> würden also alle Paragraphen nach der ersten Division
                                        gefärbt werden,
                                        wenn sie sich auf derselben Ebene befinden.<br>
                                        Im folgenden werden alle Kombinatoren beispielhaft gezeigt, Abb. 2.2 enthält den
                                        zugrundeliegenden HTML-Code
                                    </p>
                                    <figure id="abb2-2">
                                        <img src="v02b-data/Abb2.2.PNG" alt="HTML Grundlage" width="100%" />
                                        <figcaption>Abb. 2.2: HTML-Code für die folgenden Beispiele</figcaption>
                                    </figure>
                                    <figure id="abb2-3">
                                        <img src="v02b-data/Abb2.3.png" alt="Nachfahren-Kombinator" width="100%" />
                                        <figcaption>Abb. 2.3: Der Nachbar-Kombinator</figcaption>
                                    </figure>
                                    <figure id="abb2-4">
                                        <img src="v02b-data/Abb2.4.png" alt="Kind-Kombinator" width="100%" />
                                        <figcaption>Abb. 2.4: Der Kind-Kombinator</figcaption>
                                    </figure>
                                    <figure id="abb2-5">
                                        <img src="v02b-data/Abb2.5.png" alt="Nachbar-Kombinator" width="100%" />
                                        <figcaption>Abb. 2.5: Der Nachbar-Kombinator</figcaption>
                                    </figure>
                                    <figure id="abb2-6">
                                        <img src="v02b-data/Abb2.6.png" alt="Geschwister-Kombinator" width="100%" />
                                        <figcaption>Abb. 2.6: Der Geschwister-Kombinator</figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="center-paragraph">
                                <h4 id="selektoren-pseudoklassen" class="hider"><i class="pfeil-d"></i>2.2.3
                                    Pseudoklassen Selektoren</h4>
                                <p>
                                    Pseudoklassen definieren bestimmte Zustände eines Elements. Ein gutes Beispiel
                                    hierfür ist ein einfacher, mittels <span class="code">&lta></span> eingebundener,
                                    Link. Dieser Link hat
                                    verschiedene Zustände: Unbesucht, besucht, hover (Die Maus befindet sich auf dem
                                    Link) sowie aktiv (Der Link wird mit gehaltener Maustaste geklickt). Für diese
                                    Zustände kann man dem Link unterschiedliche Eigenschaften zuweisen. Diese
                                    Zustände werden angesprochen, indem man Element:Zustandsname nutzt. Im Beispiel
                                    mit dem Link spricht man den Zustand hover folgendermaßen an:
                                    <span class="code">a:hover{Deklarationen}</span>. Von diesen Pseudoklassen
                                    gibt es zu viele, um sie hier
                                    alle aufzuzählen, ein paar zusätzliche Beispiele aber sind input:focus, welches
                                    das aktuell im Fokus liegende <span class="code">&ltinput></span> Element
                                    selektiert, <span class="code">p:lang(de)</span>, welches
                                    jeden Paragraph auswählt, dessen lang=““-Attribut auf „de“ gesetzt ist, oder
                                    <span class="code">p:only-child</span>, das jeden Paragraphen auswählt, der
                                    das einzige Kind seines
                                    umschließenden Elements ist. Man muss keine HTML-Elemente vor den Doppelpunkt
                                    setzen, es können auch Klassen oder mit einer ID versehene Elemente angesteuert
                                    werden.
                                </p>
                            </div>
                            <div class="center-paragraph">
                                <h4 id="selektoren-pseudoelemente" class="hider"><i class="pfeil-d"></i>2.2.4
                                    Pseudoelement Selektoren</h4>
                                <p>
                                    Pseudoelemente werden benutzt, um verschiedene Teile eines Elements zu stylen.
                                    Ähnlich wie Pseudoklassen werden sie mit :: angesteuert. <span
                                        class="code">.my-class::after{content:
                                        „Ende Klasse“;}</span> würde zum Beispiel nach jedes Element der Klasse my-class
                                    „Ende
                                    Klasse“ schreiben. Im Kontrast dazu würde <span
                                        class="code">.my-class::after{content: „Anfang
                                        Klasse“;}</span> „Anfang Klasse“ vor jedes Element der Klasse setzen. Mit <span
                                        class="code">::first-line</span>
                                    beziehungsweise <span class="code">::first-letter</span> lassen sich die erste Zeile
                                    respektive der erste
                                    Buchstabe ansteuern. <span class="code">::selection</span> bezieht sich auf den vom
                                    User ausgewählten
                                    Text/Inhalt. So könnte man mit <span class="code">*::selection{color: red;
                                        background: black;}</span>
                                    festlegen, dass jeglicher auf der Seite ausgewählter Text rot auf schwarzem
                                    Hintergrund erscheint.
                                </p>
                            </div>
                            <div class="center-paragraph">
                                <h4 id="selektoren-attribut" class="hider"><i class="pfeil-d"></i>2.2.5 Attributs
                                    Selektoren</h4>
                                <div>
                                    <p>
                                        Attributs Selektoren selektieren Elemente, welches ein bestimmtes Attribut
                                        haben.
                                        Man kann auch auswählen, dass das Attribut einen bestimmten Wert haben soll. Den
                                        Selektor schreibt man in eine eckige Klammer hinter das gewünschte Element,
                                        <span class="code">a[target]</span> beispielsweise selektiert jedes
                                        anchor-Element, welches extra ein Ziel
                                        spezifiziert hat. Attribute mit einem bestimmten Wert lassen sich per
                                        <span class="code">[attribut=“wert“]</span> anwählen. Mittels <span
                                            class="code">[attribut*=“wert“]</span> und
                                        <span class="code">[attribut~=“wert“]</span>
                                        lassen
                                        sich nach Substrings suchen. Die Unterscheidung der beiden sieht wie folgt aus:
                                        Nutzt man ~= muss der gesuchte Substring durch Leerzeichen vom Rest des Strings
                                        abgetrennt sein, nutzt man *= reicht es, wenn der Wert in irgend einer Form
                                        enthalten ist. Eine ähnliche Verwandtschaft teilen [attribut^=“wert“]</span> und
                                        <span class="code">[attribut|=“wert“]</span>. Beide werden genutzt, um zu
                                        prüfen, ob das Attribut mit dem
                                        Wert
                                        „wert“ beginnt. Benutzt man |= muss das Präfix durch einen Bindestrich („-“) vom
                                        Rest des Attributs getrennt sein, nutzt man ^= spielt das keine Rolle. Die Suche
                                        eines Suffix erfolgt mittels <span class="code">[attribut$=“wert“]</span>. Hier
                                        gibt es keine Gegenstück.
                                    </p>
                                    <p class="warnung">
                                        Achtung:<br>
                                        Das Trennzeichen für einen Substring ist ein Leerzeichen, bei einem Präfix ist
                                        das Trennzeichen ein Bindestrich!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="shorthand" class="hider"><i class="pfeil-d"></i>2.3 CSS-Shorthand</h4>
                        <p>
                            CSS erlaubt es, bei Eigenschaften, welche enge Geschwister haben, die Werte in eine Zeile zu
                            schreiben. Beispielsweise kann man, anstatt <span class="code">p{border-width: 2px;
                                border-style: solid;
                                border-color: black;}</span> einfach <span class="code">p{border: 2px solid
                                black;}</span> schreiben. In diesem Fall spielt
                            die Reihenfolge keine Rolle, da die Angaben alle eindeutig sind. Will man hingegen die
                            padding-Eigenschaft, welche den Innenabstand einer Box zu ihrem Inhalt festlegt, in
                            Shorthand schreiben, muss man die Reihenfolge beachten: <span class="code">p{padding: 1px
                                2px 3px 4px;}</span>
                            bedeutet <span class="code">p{padding-top: 1px; padding-left: 2px; padding-bottom: 3px;
                                padding-right: 4px;}</span>.
                            Hier kann es zu Verwechslungen kommen, falls man nicht aufpasst. Das Gleiche gilt für die
                            margin-Eigenschaft. Weitere Eigenschaften, bei denen man diese Schreibweise einsetzen kann,
                            sind background, font oder auch animation.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="zusammenfassung-2" class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                        <p>
                            In diesem Kapitel wurde erklärt, wie .css Dokumente aufgebaut sind, außerdem wurde erklärt,
                            wie man Selektoren, Kombinatoren und Pseudoklassen sowie -elemente und Attributs Selektoren
                            benutzt. Zu allerletzt wurde kurz dargelegt, was man unter CSS-Shorthand versteht.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="id" class="hider"><i class="pfeil-d"></i>Übungen</h4>
                        <div>
                            <p class="uebung">
                                Aufgabe 1:<br>
                                Benennen Sie alle fünf Elemente: <span class="code">p { color: red; }</span>.
                            </p>

                            <p class="uebung">
                                Aufgabe 2:<br>
                                Entwerfen sie eine Regel, die den Hintergrund des Elements mit der id=“first“ gelb färbt
                                (Tipp: Die Hintergrund-Eigenschaft heißt background).
                            </p>

                            <p class="uebung">
                                Aufgabe 3:<br>
                                Nennen sie den Selektor, der alle Links (&lta>) auswählt, die direkte Kinder eines
                                Navigations-Blocks (&ltnav>) sind.
                            </p>

                            <p class="uebung">
                                Aufgabe 4:<br>
                                Welche Elemente werden durch folgenden Selektor ausgewählt: q:lang(de)
                            </p>

                            <p class="uebung">
                                Aufgabe 5:<br>
                                Schreiben Sie einen Selektor, der alle Elemente auswählt, deren Klassenname mit „big-“
                                beginnt auswählt.
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h3 id="box-modell">3 Das Box Modell</h3>
                    </div>
                    <p class="einfuehrung">
                        In diesem Kapitel sollen sie mit dem Boxmodell sowie den dazugehörenden Eigenschaften vertraut
                        gemacht werden. Außerdem lernen sie, wie man die Breite eines Elements korrekt bestimmt und
                        Inhalt an Boxen anpasst.
                    </p>

                    <div class="center-paragraph">
                        <h4 id="allgemeines" class="hider"><i class="pfeil-d"></i>3.1 Allgemeines</h4>
                        <div>
                            <figure id="abb3-1">
                                <figcaption>Abb 3.1: Das Box-Modell</figcaption>
                                <a
                                    href="https://wiki.selfhtml.org/images/thumb/f/f3/Box-Modell.svg/900px-Box-Modell.svg.png">
                                    <img src="https://wiki.selfhtml.org/images/thumb/f/f3/Box-Modell.svg/900px-Box-Modell.svg.png"
                                        alt="Das Box-Modell" width="100%" /></a>

                            </figure>
                            <p class="clearfix">
                                Eine HTML-Seite ist eine Ansammlung von Blöcken, von denn einige auch ineinander
                                verschachtelt sind. Diese Blöcke kann man auch als Boxen betrachten, daher der Name. Das
                                Wort Box-Modell fällt meistens im Zusammenhang mit Design und Layout einer Website.
                                In CSS besteht eine Box aus vier Teilen: Inhalt (Content), Innenabstand (Padding),
                                Rahmen (Border) und Außenabstand (Margin). Das Bild rechts veranschaulicht den Aufbau
                                einer Box. Der Inhalt enthält das entsprechende HTML-Element,
                                Innenabstand, Rahmen und Außenabstand werden durch CSS festgelegt. Die Größe des Inhalts
                                kann ebenfalls per CSS festgelegt werden. Die Breite eines Elements ist folglich nicht
                                nur die Breite des Inhalts, sonder berechnet
                                sich wie folgt:
                                <br>
                                <span class="code">margin-left + border-left + padding-left + content-width +
                                    padding-right +
                                    border-right + margin-right</span>
                                <br> Die Berechnung der Höhe verhält sich analog, man muss margin, border und padding
                                sowohl oben als auch mit unten miteinbeziehen.

                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="margin-border-padding" class="hider"><i class="pfeil-d"></i>3.2 Margin, Border und
                            Padding</h4>
                        <div>
                            <p>
                                Der Außenabstand legt den Abstand zum nächsten Element auf der gleichen Ebene fest. Der
                                Bereich bleibt transparent. Mit margin-top, margin-left, margin-bottom und margin-right
                                lassen sich die Abstände für jede Seite einzeln festlegen. Um sich die Schreibarbeit
                                zu sparen kann man hier CSS-Shorthand anwenden: Man schreibt nur noch <span
                                    class="code">margin: [] [] [] [];</span> und setzt die gewünschten Werte in der
                                Reihenfolge oben, links, unten, rechts
                                ein. Falls die Werte alle gleich sind, reicht es, <span class="code">margin: [];</span>
                                zu schreiben. Der Innenabstand legt den Abstand fest, den der Inhalt vom Rahmen hat.
                                Dieser wird analog zum Außenabstand festgelegt, statt
                                margin schreibt man jedoch padding. Auch hier gibt es die Möglichkeit, Shorthand zu
                                nutzen. Der Rahmen, oder border, eines Elements zieht eine sichtbare Linie um dieses.
                                Man kann die Dicke, die Farbe und den Stil des Rahmens
                                mit border-width, border-color und border-style festlegen. Auch hier gibt es eine
                                Shorthand Funktion, man schreibt einfach <span class="code">border: [] [] [];</span> und
                                trägt die gewünschten Werte ein. Die Reihenfolge spielt
                                keine Rolle. Will man die verschiedenen Kanten des Rahmens unterschiedlich gestalten, so
                                ist auch dies möglich. Mit <span class="code"></span>border-[seite]: [] [] [];</span>
                                lassen sich die Kanten einzeln definieren. Hier wird ebenfalls die Shorthand
                                Schreibweise genutzt. Die geläufigsten border-styles sind solid, dotted, oder dashed.
                                Außerdem lassen sich die Ecken mit border-radius abrunden. Weitere border-styles mit
                                verschiedenen
                                Radien sind in Abb. 3.2 zu sehen.
                            </p>
                            <figure id="abb3-2">
                                <img src="v02b-data/Abb3.2.png" alt="Weitere Rahmenstile" width="100%" />
                                <figcaption>Abb. 3.2: Weitere Rahmenstile</figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="overflow" class="hider"><i class="pfeil-d"></i>3.3 Overflow</h4>
                        <p>
                            Mit der Overflow-Eigenschaft (dt.: Überfluss) lässt sich festlegen, was mit Inhalt passiert,
                            der über die vorgegebene Breite und Höhe hinaus ragt. Der default-Wert ist <span
                                class="code">overflow:visible</span>, dies bedeutet,
                            dass der Text auch über die vorgegebene Größe hinaus sichtbar ist und möglicherweise in
                            andere Elemente hineinragt. Will man dies nicht, so stehen einem <span
                                class="code">overflow:hidden</span> und <span class="code">overflow:scroll</span> zur
                            Verfügung, welche den Inhalt, welcher zu viel ist, auf verschiedene Arten verstecken.
                            overflow:hidden schneidet das, was an Inhalt zu viel ist, komplett ab. <span
                                class="code">overflow:scroll</span> schneidet den Inhalt
                            ebenfalls ab, fügt der Box aber Scrollbars hinzu, mit denen man durch den Inhalt in der Box
                            scrollen kann. Es gibt auch noch einen vierten Wert, overflow:auto. Wird dieser Wert
                            genutzt, legt der Browser automatisch fest, welcher
                            der anderen drei Werte angebracht ist. Praktischer ist es aber, den Overflow manuell
                            festzulegen um ein konsistentes Aussehen zu garantieren.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="zusammenfassung-3" class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                        <p> Das Ziel dieses kurzen Kapitels war es, Sie mit dem Box-Modell vertraut zu machen und Ihnen
                            darzulegen, wie sie einzelne Elemente ihm Box-Modell richtig anordnen und mit Rahmen
                            versehen. Außerdem wurde beschrieben, wie man mit
                            dem Fall umgeht, wenn der Inhalt einer Box über die vorgesehenen Maße herausragt.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="uebungen-3" class="hider"><i class="pfeil-d"></i>Übungen</h4>
                        <div>
                            <p class="uebung">
                                Aufgabe 1:<br> Aus was besteht eine Box im CSS Box-Modell?
                            </p>

                            <p class="uebung">
                                Aufgabe 2:<br> Berechnen sie die Breite des folgenden Elements:<br>
                                <span class="code">p
                                    {margin: 10px; border: 2px solid black; padding: 5px; width: 50px;}</span>
                            </p>

                            <p class="uebung">
                                Aufgabe 3:<br> Wie verhindern Sie, dass der Inhalt einer Box über die
                                festgelegte Größe hinausragt?
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h3 id="text-formatierung">4 Text und Textformatierung</h3>
                    </div>
                    <p class="einfuehrung">
                        Ziel dieses Kapitels ist es, Ihnen Schriftarten und deren Familien näher zu bringen und Ihnen
                        verschiedene Möglichkeiten zur Textdekoration zu zeigen. Außerdem wird Ihnen gezeigt, wie Sie
                        das Layout eines Textes bestimmen können.
                    </p>



                    <div class="center-paragraph">
                        <h4 id="schriftarten" class="hider"><i class="pfeil-d"></i>4.1 Schriftarten</h4>
                        <div>
                            <p>
                                Text ist der zentrale Bestandteil der meisten Websites. Man unterscheidet zwischen
                                vielen unterschiedlichen Elementen wie Überschriften, Navigationselementen oder normalen
                                Textkörpern. Folglich gibt es viele verschiedene Möglichkeiten, ihn zu dekorieren. Das
                                wahrscheinlich wichtigste Werkzeug zur Beeinflussung des Aussehens von Texten sind wohl
                                die Schriftarten (engl. „fonts“).
                            </p>
                            <figure id="abb4-1">
                                <img src="https://www.w3schools.com/css/serif.gif" width="100%"
                                    alt="Veranschaulichung Serifen" />
                                <figcaption>Abb. 4.1 Veranschaulichung von Serifen</figcaption>
                            </figure>
                            <p>
                                Zunächst unterscheidet man zwischen Schriftarten mit Serifen und Schriftarten ohne
                                Serifen (<strong>„Sans-serif“</strong>). Serifen sind kleine Linien und Haken am Ende
                                mancher Zeichen, in
                                Abb. 4.1 sind diese mit rot markiert. Zusätzlich gibt es noch <strong>Monospace</strong>
                                Schriftarten
                                (Jeder Buchstabe hat genau die gleiche Breite), kursive Schriftarten (imitieren
                                Handschriften) und fantasy Schriftarten, welche eher als Dekoration genutzt werden
                                sollten. Für die Wiedergabe auf Bildschirmen sind Serifenlose Schriftarten meist besser
                                geeignet, da sie meist leichter zu lesen sind.<br>
                                Weiterhin unterscheidet man zwischen verschieden Familien von Schriftarten. Die
                                bekanntesten sind <strong>Arial</strong> (sans-serif), <strong>Helvetica</strong>
                                (sans-serif), <strong>Times New Roman</strong> (serif)
                                oder auch Georgia (serif). Diese und einige weitere sind nativ in CSS eingebunden und
                                können problemlos genutzt werden. Dies geschieht durch die <strong>font-family</strong>
                                Eigenschaft, der als Wert der Name der Schriftart übergeben wird (Falls der Name aus
                                mehreren Worten besteht, muss man ihn in Anführungszeichen setzen. Mit <span
                                    class="code">p {font-family:
                                    „Times New Roman“;}</span> wird die Schriftart jedes Paragraphen auf auf „Times New
                                Roman“
                                gesetzt (in dieser Schriftart sind übrigens auch die Texte dieses Skripts verfasst). Man
                                kann auch mehrere Schriftarten, durch Kommata getrennt, angeben. Diese weiteren
                                Schriftarten werden genutzt, wenn der Browser die erste Schriftart nicht unterstützt. So
                                macht es Sinn, die weiteren Schriftarten immer allgemeiner zu nennen, zum Beispiel:<br>
                                <span class="code">p {font-family: „Times New Roman“, Times, serif;}</span><br>
                                Erst versucht der Browser die Schriftart „Times New Roman“ anzuwenden. Falls das nicht
                                klappt, versucht er eine Schriftart aus der Familie „Times“ zu nutzen. Klappt dies auch
                                nicht, wendet er eine Schriftart an, die Serifen enthält.<br>
                                Natürlich kann man auch die Schriftgröße ändern, hierfür sollte man in den meisten
                                Fällen relative Maße nutzen. Die Standartgröße sind 16px, bzw 1em. Will man eine andere
                                Größe für den Text nutzt man font-size und eine beliebige Größenangabe. Nutzen sollte
                                man em, da dies den Nutzern erlaubt, die Schriftgröße zu vergrößern/verkleinern. Man
                                kann die Textgröße auch an die Größe des Browserfensters anpassen, indem man die Einheit
                                vw nimmt.<br>
                                Neben der Größe kann man die Schriftarten auch weiter bestimmen. Nutzt man font-style:
                                italic; wird der Text kursiv gezeigt. Weitere Werte für diese Eigenschaft sind normal
                                und oblique, welches im Prinzip sehr ähnlich zu italic ist, aber weniger unterstützt
                                wird.<br>
                                Zudem kann man mit <strong>font-weight: bold;</strong> festlegen, dass der Text fett
                                gedruckt wird.
                                Alternativ kann man statt bold auch <strong>lighter/bolder</strong> nehmen, dies bezieht
                                sich auf das
                                Elternelement. Es besteht auch die Möglichkeit, ein vielfaches von 100 zu nehmen, der
                                Maximalwert ist 900. Durch die font-variant Eigenschaft kann man den Text in „kleinen
                                Großbuchstaben“ darstellen, der dazugehörige Wert ist <strong>small-caps</strong> Der
                                Standartwert ist
                                normal.
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="textdekoration" class="hider"><i class="pfeil-d"></i>4.2 Textdekoration</h4>
                        <p>
                            Neben den verschiedenen Schriftarten gibt es natürlich noch weitere Methoden, um Text anders
                            aussehen zu lassen.<br>
                            Die Farbe eines Textes lässt sich mit der <strong>color</strong>-Eigenschaft verändern. Als
                            Wert lässt sich
                            hier jeder beliebige Farbwert eintragen, der wie im Kapitel 1.6 – Farben beschrieben
                            formatiert ist. Man muss beachten, dass man, um dem World Wide Web Consortium konform zu
                            sein, eine Hintergrundfarbe angeben muss, falls man die Textfarbe ändert. Dies schafft man
                            mit der <strong>background</strong>-Eigenschaft, der man als Wert ebenfalls jeden Farbe
                            übergeben kann,
                            solange diese den Vorgaben entspricht.<br>
                            Mit der Eigenschaft <strong>text-decoration-line</strong> lässt sich der Text
                            unterstreichen, überstreichen
                            oder auch durchstreichen. Die Werte hierfür sind <strong>underline</strong>,
                            <strong>overline</strong> und <strong>strike-through</strong> Man
                            kann auch beliebige Kombinationen der drei Werte nutzen, dafür schreibt man sie einfach ohne
                            Komma(!) hintereinander. Will man diese Linien farbig gestalten, so nutzt man die
                            Eigenschaft <strong>text-decoration-color</strong> mit einem Farbwert nach Kapitel 1.6.
                            Mittels
                            <strong>text-decoration-style</strong> lässt sich der Stil der Linien festlegen, als Werte
                            kann man
                            beispielsweise <strong>dotted</strong>, <strong>double</strong> oder <strong>dashed</strong>
                            nehmen. Der Standardwert ist <strong>solid</strong> Für diese
                            Eigenschaften gibt es eine Shorthand Schreibweise, nämlich <strong>text-decoration</strong>
                            Dieser kann man
                            alle vorherig genannten Eigenschaften übergeben, außerdem kann man die dicke der Dekoration
                            festlegen, beispielsweise 5px. Tipp: Will man die automatischen Unterstreichungen von Links
                            entfernen, kann man <span class="code">text-decoration: none</span> nutzen.<br>
                            Mit text-transform lässt sich die Groß-/Kleinschreibung eines Textes beeinflussen. Der Wert
                            uppercase transformiert alle Buchstaben in Großbuchstaben, lowercase bewirkt das Gegenteil
                            und transformiert alle Buchstaben in Kleinbuchstaben. Den ersten Buchstaben eines jeden
                            Wortes in einen Großbuchstaben transformieren kann man mittels
                            <strong>capitalize</strong><br>
                            Man kann seinem Text auch einen Schatten hinzufügen. Dies funktioniert durch die text-shadow
                            Eigenschaft, diese benötigt drei Werte: Horizontalen Versatz, Vertikalen Versatz und die
                            Farbe des Schattens. Ein Beispiel hierfür wäre <span class="code">p {text-shadow: 2px 3px
                                lightgrey;}</span>.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="textlayout" class="hider"><i class="pfeil-d"></i>4.3 Textlayout</h4>
                        <div>
                            <figure id="abb4-2">
                                <img src="v02b-data/Abb4.2.png" alt="beispiel text align justify" width="100%" />
                                <figcaption>Abb. 4.2: text-align: justify;</figcaption>
                            </figure>
                            <p>
                                Auch für das Textlayout gibt es einige Eigenschaften. Diese erlauben es unter anderem,
                                den Text auszurichten oder den Abstand zwischen Zeichen zu verändern (dies nennt man
                                Kerning). Die Eigenschaft <strong>text-align</strong> erlaubt das Ausrichten von Texten.
                                Mittels den
                                Werten <strong>center</strong>, <strong>left</strong> oder <strong>right</strong> lässt
                                sich der Text an der gewünschten Position
                                platzieren. Ein interessanter Wert hierfür ist auch <strong>justify</strong> Nutzt man
                                diesen Wert, wird
                                der Abstand zwischen den Worten so eingestellt, dass der Text immer auf beiden Seiten
                                perfekt bündig ist, siehe Abb. 4.2.Will man die erste Zeile eines Textes einrücken,
                                hilft einem <strong>text-indent</strong> Diese Eigenschaft rückt die erste Zeile soweit
                                ein, wie man in
                                ihrem Wert festgelegt hat. Den Buchstabenabstand ändert man, indem man die Eigenschaft
                                <strong>letter-spacing</strong> benutzt. Als Wert können hier sowohl positive als auch
                                negative Werte
                                übergeben werden. Positive Werte bewirken ein Strecken der Wörter, durch negative Werte
                                hingegen werden sie gestaucht. Analog dazu verhält sich <strong>word-spacing</strong>,
                                welches die
                                Abstände zwischen Wörtern ändert. Auch hier lassen sich positive und negative Werte
                                angeben.<br>
                                Die Schreibrichtung eines Textes lässt sich durch <strong>direction</strong>
                                beeinflussen. Die möglichen
                                Werte sind <strong>rtl</strong>, <strong>ltr</strong> und <strong>inherit</strong> ltr
                                bedeutet left-to-right und ist unsere normale
                                Schreibrichtung und damit der Standartwert. Nutzt man rtl, wird der Text von rechts nach
                                links geschrieben. Inherit heißt, dass die Schreibrichtung vom Elternelement geerbt
                                wird.
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="zusammenfassung-4" class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                        <p>
                            In diesem Kapitel wurde zunächst erklärt was es für Schriftarten gibt und worin diese sich
                            hauptsächlich unterscheiden. Zusätzlich wurde dargelegt, wie man die Schriftgröße ändert und
                            was für Eigenschaften die Schriftarten haben. Weiterhin wurden einige Methoden zur
                            Textdekoration erörtert und schlussendlich wurde dargestellt, wie man Text grundlegend
                            formatiert.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="uebungen-4" class="hider"><i class="pfeil-d"></i>Übungen</h4>
                        <p class="uebung">
                            Aufgabe 1:<br>
                            Worin besteht der Unterschied der zwei großen Hauptfamilien von Schriftarten?
                        </p>
                        <p class="uebung">
                            Aufgabe 2:<br>
                            Was für eine Schriftart sollten Sie für Inhalte nutzen, die auf einem Computerbildschirm
                            dargestellt werden?
                        </p>
                        <p class="uebung">
                            Aufgabe 3:<br>
                            Erstellen Sie eine CSS-Regel, sodass jeder nicht anders formatierte Paragraph in der
                            Schriftart Arial und kursiv dargestellt wird.
                        </p>
                        <p class="uebung">
                            Aufgabe 4:<br>
                            Sie ändern die Farbe eines Textes. Was sollten Sie zusätzlich tun?
                        </p>
                        <p class="uebung">
                            Aufgabe 5:<br>
                            Nennen Sie eine Regel, die eine rote Linie unter einen Text mit der ID „unterstrichen“
                            zieht.
                        </p>
                        <p class="uebung">
                            Aufgabe 6:<br>
                            Schreiben Sie eine Regel, die dafür sorgt, dass der Text mit der ID „angepasst“ sowohl links
                            als auch rechts bündig mit der Box ist.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h3 id="layout">5 Layout</h3>
                    </div>
                    <p class="einfuehrung">
                        Im Verlauf dieses Kapitels werden Ihnen die Grundlagen des Layout-Managments vorgestellt. Nach
                        diesem Kapitel sollten Sie einen Überblick haben, wie man das Layout seiner Seite nach seinen
                        Vorstellungen gestaltet.
                    </p>

                    <div class="center-paragraph">
                        <h4 id="position" class="hider"><i class="pfeil-d"></i>5.1 Position</h4>
                        <div>
                            <p>
                                Mit Hilfe der <strong>position</strong>-Eigenschaft lassen sich Elemente beliebig auf
                                dem Bildschirm
                                anordnen. Dabei gibt es auch die Möglichkeit, die Elemente aus dem normalen Fluss der
                                Seite herauszunehmen und beispielsweise am Browserfenster auszurichten. Nachdem man der
                                Eigenschaft einen anderen Wert als den Standartwert zugeordnet hat, lassen sich die
                                Elemente mit den Eigenschaften left, right, top und bottom ausrichten.
                            </p>
                            <p class="warnung">
                                Achtung:<br>
                                Alle durch position angeordneten Elemente laufen Gefahr, andere Elemente zu überdecken!
                            </p>
                            <p>
                                Der Standartwert für position ist static, nutzt man diesen Wert, wird das Element normal
                                Im Fluss der Seite positioniert und die left, right, top und bottom Eigenschaften haben
                                keine Auswirkung.
                            </p>
                            <figure id="abb5-1">
                                <img src="v02b-data/Abb5.1.png" alt="position: relative; beispiel" width="100%" />
                                <figcaption><span class="code">Abb. 5.1: position: relative; top: 2px; left: 10px</span>
                                </figcaption>
                            </figure>
                            <p>
                                Anders sieht es schon aus, wenn man den Wert <strong>relative</strong> nutzt. Dieser
                                Wert erlaubt es
                                einem, das Element relativ zu der normalen Position zu platzieren. Mit left, right, top
                                und bottom lässt sich nun der Abstand zu den enstprechenden Rändern/Elementen festlegen.
                                Freigewordener Raum wird nicht von anderen Elementen genutzt! Im Beispiel rechts wurde
                                der rechte grüne Block mit position:relative platziert.
                            </p>
                            <p>
                                Der Wert <strong>fixed</strong> erlaubt es, ein Element beliebig im Browserfenster zu
                                platzieren. Die
                                Positionsattribute beziehen sich ebenfalls auf die Position im Browserfenster. An der
                                Stelle, an der es normalerweise stünde, entsteht keine Lücke, der Platz wird mit dem
                                nächsten Element aufgefüllt. Auch beim Scrollen bleibt ein fixiertes Element an der
                                gleichen Stelle stehen, dies erlaubt es beispielsweise Hinweise auf Cookies zu
                                erstellen, die erst verschwinden, wenn sie weggeklickt werden.<br>
                                Mit <strong>absolute</strong> lässt sich ein Element, ähnlich wie mit fixed, komplett
                                aus dem Fluss
                                herausnehmen, das heißt, die hinterlassene Lücke wird mit dem nächsten Element
                                aufgefüllt. Die Positionsangaben beziehen sich hierbei jedoch auf das umschließende
                                Element, das heißt, beim Scrollen kann das so positionierte Element verschwinden. Es ist
                                jedoch Vorsicht geboten: Hat das zu positionierende Element kein umschließendes
                                positioniertes Element, orientiert es sich am Browserfenster. Beim Scrollen wird es, im
                                Gegensatz zu einem fixierten Element, jedoch mit.<br>
                                Ein mit dem Wert <strong>sticky</strong> versehenes Element verhält sich wie folgt: Es
                                bleibt an der
                                Stelle, an die es gesetzt wurde, so lange, bis der Nutzer an dem Element „vorbei“
                                scrollt. Wenn dies geschieht, bleibt das Element an der festegelegten Position stehen.
                                Die Positionsangaben beziehen sich hierbei auf das Browserfenster. Zu beachten ist, dass
                                das Element nicht stehen bleibt, wenn man keine Positionsangabe macht. Will man, dass
                                das Element beim horizontalen Scrollen bestehen bleibt, muss man den Abstand zum linken
                                Rand angeben. Will man, dass es beim vertikalen Scrollen bestehen bleibt, muss man den
                                Abstand nach oben angeben.
                            </p>
                            <div class="center-paragraph">
                                <h4 id="z-index" class="hider"><i class="pfeil-d"></i>5.1.1 Der z-Index</h4>
                                <div>
                                    <figure id="abb5-2">
                                        <img src="v02b-data/Abb5.2.png" alt="z-index beispiel" width="100%" />
                                        <figcaption>Abb. 5.2: links: grün hat z-index: -1, rechts: grün hat z-index 1
                                        </figcaption>
                                    </figure>
                                    <p>
                                        Wenn man Elemente so positioniert, dass sie andere Elemente überlappen, kann man
                                        mittels der Eigenschaft <strong>z-index</strong> festlegen, welches Element
                                        „näher am
                                        Betrachter“, also oben liegt. Dies ist in Abb. 5.2. zu sehen. Akzeptierte Werte
                                        sind alle ganzen Zahlen. Ein Element mit einem negativen z-index liegt stehts
                                        hinter Elementen ohne z-index, ein Element mit positivem z-index stehts davor.
                                        Der Standardwert ist also 0. Hinweis: Damit der z-index funktioniert, müssen
                                        Elemente, die diese Eigenschaft haben, einen anderen Wert als static bei
                                        position haben. Notfalls kann man position:relative setzen, dies an sich
                                        verändert den Fluss nicht aber erlaubt die Positionierung auf der z-Achse.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="float-clear" class="hider"><i class="pfeil-d"></i>5.2 Float und Clear</h4>
                        <div>
                            <p>
                                Mit dem <strong>float</strong> Attribut lassen sich Elemente in ihrem umgebenden Element
                                platzieren. Dies
                                erlaubt es beispielsweise, ein Bild ordentlich neben Text zu platzieren. Gültige Werte
                                hierfür sind <strong>left</strong>, <strong>right</strong>, <strong>none</strong> und
                                <strong>inherit</strong> left bzw right positionieren die Elemente
                                auf der entsprechenden Seite. none ist der Standardwert, inherit bedeutet, dass das
                                Element den Wert von seinem umgebenden Element erbt. Abb. 5.3 und 5.4 zeigen den
                                Unterschied zwischen einem Block, der mit float platziert wurde, und einem, der nicht
                                extra platziert wurde.
                            </p>
                            <div style="position: relative; margin-bottom: 2em;">
                                <figure id="abb5-3">
                                    <img src="v02b-data/Abb5.3.png" alt="mit float" width="100%" />
                                    <figcaption>Abb. 5.3: Der blaue Block wurde mittels float:left platziert
                                    </figcaption>
                                </figure>
                                <figure id="abb5-4">
                                    <img src="v02b-data/Abb5.4.png" alt="ohne float" width="100%" />
                                    <figcaption>Abb. 5.4: Das gleiche Beispiel ohne float
                                    </figcaption>
                                </figure>
                            </div>
                            <p>
                                Will man verhindern, dass Elemente neben einem Element schweben können, nutzt man das
                                Attribut <strong>clear</strong> clear akzeptiert die Werte <strong>none</strong>,
                                <strong>left</strong>,
                                <strong>right</strong>, <strong>both</strong> und <strong>inherit</strong>. none ist
                                der Standartwert, inherit bedeutet, dass der Wert vom umschließenden Element übernommen
                                wird. Setzt man <span class="code">clear: left;</span> kann links neben dem Element kein
                                Element schweben, das
                                gilt in umgekehrter Version auch für <span class="code">clear: right;</span>. <span
                                    class="code">clear:both</span>
                                verbietet das Schweben
                                von Elementen auf beiden Seiten. In den Abbildungen 5.5 und 5.6 wurde der blaue Block
                                mit float:right platziert, und in Abb. 5.6 wurde der Text durch clear:right von dem
                                Block freigehalten.
                            </p>
                            <div style="position: relative; margin-bottom: 2em;">
                                <figure id="abb5-5">
                                    <img src="v02b-data/Abb5.5.png" alt="ohne clear" width="100%" />
                                    <figcaption>Abb. 5.5: Der blaue Block wurde mittels float:right platziert
                                    </figcaption>
                                </figure>
                                <figure id="abb5-6">
                                    <img src="v02b-data/Abb5.6.png" alt="mit clear" width="100%" />
                                    <figcaption>Abb. 5.6: Der Textabschnitt wird mittels clear:right von schwebenden
                                        Elementen freigehalten
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="center-paragraph">
                                <h4 id="clearfix" class="hider"><i class="pfeil-d"></i>5.2.1 Der Clearfix Hack</h4>
                                <div>
                                    <p>
                                        Enthält ein Container ein schwebendes Element, das größer ist, als der Container
                                        selbst, kommt es vor, dass das Element aus dem Container herausragt. Dies
                                        passiert, da schwebende Elemente nicht zum Inhalt eines Containers zählen. Um
                                        dies zu verhindern, wird auf den Container ein sogenannter Clearfix angewendet.
                                        Dieser fügt hinter dem Container einen leeren Inhalt hinzu und nutzt clear:both,
                                        um zu verhindern, dass er „unter“ das bereits schwebende Element fällt.
                                    </p>
                                    <div style="position: relative; margin-bottom: 2em;">
                                        <figure id="abb5-7">
                                            <img src="v02b-data/Abb5.7.png" alt="ohne clearfix" width="100%" />
                                            <figcaption>Abb. 5.7: Beispiel ohne Clearfix
                                            </figcaption>
                                        </figure>
                                        <figure id="abb5-8">
                                            <img src="v02b-data/Abb5.8.png" alt="mit clearfix" width="100%" />
                                            <figcaption>Abb. 5.8: Beispiel mit Clearfix
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <p>
                                        Für den Clearfix kann man entweder eine eigene Klasse erstellen und diese auf
                                        viele Elemente anwenden, oder man erweitert eine existierende Klasse/ID um die
                                        entsprechenden Deklarationen. Zunächst benötigt man <span
                                            class="code">.containername::after</span>, um
                                        die Änderungen nach dem Container zu machen. In diese Regel benötigt man die
                                        Deklaration <span class="code">content: „“;</span> um einen Block hinzuzufügen
                                        bei dem man mit <span class="code">clear:
                                            both;</span> verhindern kann, dass er unter schwebende Elemente enthält.
                                        Zusätzlich
                                        nutzt man <span class="code">display: table;</span> um den Block so breit zu
                                        machen, wie der Container
                                        ist. Abb. 5.9 veranschaulicht die Selektoren, die man für einen Clearfix
                                        braucht, nochmal.
                                    </p>
                                    <figure id="abb5-9">
                                        <img src="v02b-data/Abb5.9.png" alt="clearfix regel" width="100%" />
                                        <figcaption>Abb. 5.9: Die Clearfix-Regel
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="zusammenfassung-5" class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                        <p>
                            In diesem Kapitel wurde beschrieben, wie man Elemente auf seiner Website korrekt
                            positioniert. Es wurde die position-Eigenschaft und ihre Werte erklärt, es wurde erklärt,
                            was es mit dem z-Index auf sich hat und es wurde dargelegt, wie man mit float und clear
                            umgeht. Außerdem wurde erklärt, wo Fehler auftreten können und wie man diese vermeiden kann.
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="uebungen-5" class="hider"><i class="pfeil-d"></i>Übungen</h4>
                        <p class="uebung">
                            Aufgabe 1:<br>
                            Wie erstellen Sie ein Element, welches immer die gleiche Position im Fenster hat?
                        </p>
                        <p class="uebung">
                            Aufgabe 2:<br>
                            Was kann passieren, wenn man beim positionieren von Elementen nicht aufpasst?
                        </p>
                        <p class="uebung">
                            Aufgabe 3:<br>
                            Wie können Sie ein Bild im Hintergrund eines Textes platzieren?
                        </p>
                        <p class="uebung">
                            Aufgabe 4:<br>
                            Wie kann man Bilder (oder andere Blocks) ordentlich neben einen Text (oder andere Elemente)
                            platzieren?
                        </p>
                        <p class="uebung">
                            Aufgabe 5:<br>
                            Sie haben ein Bild in einen Rahmen mit Text platziert, aber das Bild ist zu groß für den
                            Rahmen und schaut unten heraus. Wie beseitigen Sie diesen Fehler?
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="loesungen" class="hider"><i class="pfeil-d"></i>A Lösungen</h4>
                        <p>
                            1.1<br>
                            CSS, also Cascading Style Sheets, ist eine Designsprache, die es ermöglicht, Webseiten bis
                            ins kleinste Detail abzustimmen.<br><br>
                            1.2<br>
                            Unter responsivem Webdesign versteht man die Erstellung von Websites, die auf allen
                            Endgeräten, unabhängig von Größe oder Auflösung des Bildschirms und Eingabemöglichkeiten,
                            gut zu lesen und zu nutzen sind.<br><br>
                            1.3<br>
                            Die Kaskadierung in CSS erlaubt es, ein generelles Design für Gruppen von Elementen zu
                            entwerfen und trotzdem noch in der Lage zu sein, Untergruppen oder einzelne Elemente anders
                            zu gestalten. Dies spart viel Arbeit.<br><br>
                            1.4<br>
                            Nutzt man den inline-style direkt im HTML-Dokument, geht die Übersichtlichkeit des Codes
                            verloren. Außerdem verliert man die Vorteile der Kaskadierung und muss, wenn man den Style
                            von verschiedenen Elementen ändern will, bei jedem Element den inline-style umschreiben
                            anstatt es ein mal zentral machen zu können.<br><br>
                            1.5<br>
                            <span class="code">&ltlink href=“/handheld.css“ media=“handheld“ rel=“stylesheet“
                                /></span><br>
                            2.1<br>
                            Regel (Selektor { Deklaration( Eigenschaft: Wert;) })<br><br>
                            2.2<br>
                            <span class="code">#first { background: yellow; }</span><br><br>
                            2.3<br>
                            nav > a<br><br>
                            2.4<br>
                            Alle Zitate, deren Sprache mittels lang=“de“ auf deutsch gesetzt wurde.<br><br>
                            2.5<br>
                            <span class="code">*[class|=“big“]</span><br><br>
                            3.1<br>
                            Eine Box besteht aus dem Außenabstand (margin), dem Rahmen (border), dem Innenabstand
                            (padding) und dem Inhalt(content).<br><br>
                            3.2<br>
                            10px + 2px + 5px + 50px + 5px + 2px + 10px = 84px<br><br>
                            3.3<br>
                            Man nutzt entweder overflow: hidden; oder overflow: scroll;.<br><br>
                            4.1<br>
                            Es gibt Schriftarten mit Serifen und es gibt Schriftarten ohne Serifen.<br><br>
                            4.2<br>
                            Eine serifenlose Schriftart.<br><br>
                            4.3<br>
                            <span class="code">p { font-family: Arial; font-weight: bold;}</span><br><br>
                            4.4<br>
                            Man sollte zusätzlich noch die Hintergrundfarbe ändern.<br><br>
                            4.5<br>
                            <span class="code">#unterstrichen{text-decoration: underline red;}</span><br><br>
                            4.6<br>
                            <span class="code">#angepasst {text-align: justify;}</span><br><br>
                            5.1<br>
                            Man nutzt die Deklaration position: fixed; und legt mit left, right, top oder bottom die
                            Position fest.<br><br>
                            5.2<br>
                            Es könnte passieren, dass ein Element ein anderes verdeckt.<br><br>
                            5.3<br>
                            Man nutzt position: absolute; und platziert das Bild mit left, right, top, oder bottom an
                            die richtige Position. Zusätzlich nutzt man z-index: -1; um dafür zu sorgen, dass das Bild
                            im Hintergrund ist.<br><br>
                            5.4<br>
                            Man nutzt float: left oder float: right, je nachdem, auf welcher Seite sich das Bild
                            befinden soll.<br><br>
                            5.5<br>
                            Man wendet einen Clearfix an.<br><br>
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="literatur" class="hider"><i class="pfeil-d"></i>B Literaturverzeichnis</h4>
                        <p>
                            Andy Budd, Emil Björklund: CSS Mastery; Apress Verlag; 2016; DOI
                            https://doi.org/10.1007/978-1-4302-5864-3<br><br>
                            Norbert Hammer, Karen Bensmann: Webdesign für Studium und Beruf; Springer Verlag; 2011; ISBN
                            978-3-642-17069-0<br><br>
                            Christoph Zillgens: Responsive Webdesign; Carl Hanser Verlag; 2012; ISBN 978-3-446-43015-0
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="abbildungen" class="hider"><i class="pfeil-d"></i>C Abbildungsverzeichnis</h4>
                        <p>
                            Abb. 1.1: Responsives Webdesign<br>
                            Abb. 1.2: Der weiter unten definierte Wert wird angenommen<br>
                            Abb. 2.1: Eine simple CSS Regel<br>
                            Abb. 2.2: HTML-Code für die folgenden Beispiele<br>
                            Abb. 2.3: Der Nachfahren-Kombinator<br>
                            Abb. 2.4: Der Kind-Kombinator<br>
                            Abb. 2.5: Der Nachbar-Kombinator<br>
                            Abb. 2.6: Der Geschwister-Kombinator<br>
                            Abb. 3.1: Das Box-Modell<br>
                            Abb. 3.2: Weitere Rahmenstile<br>
                            Abb. 4.1: Veranschaulichung von Serifen<br>
                            Abb. 4.2: text-align: justify;<br>
                            Abb. 5.1: position: relative; top: 2px; left: 10px;<br>
                            Abb. 5.2: links: grün hat z-index: -1, rechts: grün hat z-index: 1<br>
                            Abb. 5.3: Der blaue Block wurde mittels float: left platziert<br>
                            Abb. 5.4: Das gleiche Beispiel ohne float<br>
                            Abb. 5.5: Der blaue Block wurde mittels float: right platziert<br>
                            Abb. 5.6: Der Textabschnitt wird mittels clear: right von schwebenden Elementen
                            freigehalten<br>
                            Abb. 5.7: Beispiel ohne Clearfix<br>
                            Abb. 5.8: Beispiel mit Clearfix<br>
                            Abb. 5.9: Die Clearfix Regel<br>
                        </p>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="tabellen" class="hider"><i class="pfeil-d"></i>D Tabellenverzeichnis</h4>
                        <p>
                            Tab. 1.1: Vergleich verschiedener Farben und ihrer Schreibweisen<br>
                            Tab. 1.2: Relative Längeneinheiten<br>
                            Tab. 1.3: Absolute Längeneinheiten<br>
                        </p>
                    </div>
                </div>
            </div>


<?php
    include('includes/footer.php');
?>