<?php require_once './extras/refs.php'; ?>
<?php require_once './extras/project_status.php'; ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fabalous Diplomarbeit</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|IBM+Plex+Sans:600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="icon" type="image/svg+xml" href="/dist/images/logo-light.svg">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
								<img class="header-logo-image asset-light" src="dist/images/logo-light.svg" alt="Logo">
								<img class="header-logo-image asset-dark" src="dist/images/logo-light.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Fabalous</h1>
	                        <p class="hero-paragraph">Ein skalierbarer Report-Generator & <br>Changelog-Editor für <a href="https://www.fabasoft.com">Fabasoft</a></p>
	                        <div class="hero-cta">
								<a class="button button-primary" href="#main">Mehr Infos</a>
								<div class="lights-toggle">
									<input id="lights-toggle" type="checkbox" name="lights-toggle" class="switch" checked="checked">
									<label for="lights-toggle" class="text-xs"><span><span class="label-text">Light</span>mode</span></label>
								</div>
							</div>
						</div>
						<div class="hero-media">
							<div class="header-illustration">
								<img class="header-illustration-image asset-light" src="dist/images/header-illustration-light.svg" alt="Header illustration">
								<img class="header-illustration-image asset-dark" src="dist/images/header-illustration-dark.svg" alt="Header illustration">
							</div>
							<div class="hero-media-illustration">
								<img class="hero-media-illustration-image asset-light" src="dist/images/hero-media-illustration-light.svg" alt="Hero media illustration">
								<img class="hero-media-illustration-image asset-dark" src="dist/images/hero-media-illustration-dark.svg" alt="Hero media illustration">
							</div>
							<div class="hero-media-container">
								<img class="hero-media-image asset-light" src="dist/images/hero-media-light.svg" alt="Hero media">
								<img class="hero-media-image asset-dark" src="dist/images/hero-media-light.svg" alt="Hero media">
							</div>
						</div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container has-bottom-divider">
					<div class="features-inner section-inner">
						<div class="features-header text-center">
							<div class="container-sm text-left">
								<h2 id="main" class="section-title mt-0 text-center">Über das Projekt</h2>
	                            <p class="section-paragraph">
                                    Ziel ist es, das momentane Scrum-Tool der Abteilung Fabasoft eGov Editions, 
                                    momentan genannt ScrumTool3, komplett zu erneuern. Dieses Tool funktioniert 
                                    zum jetzigen Stand nur als Fat-Client mit Anbindungen an die Fabasoft Cloud, 
                                    welches jedoch am Ende der Diplomarbeit als State-of-the-Art Server-Client 
                                    Applikation bestehen soll. 
                                </p>
                                <p class="section-paragraph">
                                    Dabei wird die gesamte Anwendung hinsichtlich Architektur und UI neu designed 
                                    und entwickelt und nicht umgeschrieben.  
                                </p>
							</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="features-inner section-inner">
                    <div class="features-header text-center">
                        <div class="container-sm text-left">
                            <h2 class="section-title mt-0 text-center">Hauptfunktionen</h2>
                            <div class="features-image">
                                <img class="features-illustration asset-dark" src="dist/images/features-illustration-dark.svg" alt="Feature illustration">
                                <img class="features-box asset-dark" src="dist/images/tool-dark.png" alt="Feature box">
                                <img class="features-illustration asset-dark" src="dist/images/features-illustration-top-dark.svg" alt="Feature illustration top">
                                <img class="features-illustration asset-light" src="dist/images/features-illustration-light.svg" alt="Feature illustration">
                                <img class="features-box asset-light" src="dist/images/tool-light.png" alt="Feature box">
                                <img class="features-illustration asset-light" src="dist/images/features-illustration-top-light.svg" alt="Feature illustration top">
                            </div>
                            <div class="features-wrap">
                                <div class="feature is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img class="asset-light" src="dist/images/feature-01-light.svg" alt="Feature 01">
                                            <img class="asset-dark" src="dist/images/feature-01-dark.svg" alt="Feature 01">
                                        </div>
                                        <div class="feature-content">
                                            <h3 class="feature-title mt-0">Report Generation</h3>
                                            <p class="text-sm mb-0">
                                                Generierung von Reports aus geparsten Changelogs von mehreren Userstories mit verschiedenen Ausgabeformaten
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img class="asset-light" src="dist/images/feature-03-light.svg" alt="Feature 03">
                                            <img class="asset-dark" src="dist/images/feature-03-dark.svg" alt="Feature 03">
                                        </div>
                                        <div class="feature-content">
                                            <h3 class="feature-title mt-0">Changelog Editing</h3>
                                            <p class="text-sm mb-0">
                                                Erstellen und Bearbeiten von Change Logs innerhalb Userstories per Web-Editor mit eigener Markup-Syntax
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img class="asset-light" src="dist/images/feature-02-light.svg" alt="Feature 02">
                                            <img class="asset-dark" src="dist/images/feature-02-dark.svg" alt="Feature 02">
                                        </div>
                                        <div class="feature-content">
                                            <h3 class="feature-title mt-0">Cloud Anbindung</h3>
                                            <p class="text-sm mb-0">
                                                Einbindung in die bestehende Fabasoft Business Process Cloud mittels SOAP bzw. einer JSON-basierten REST API und Active Directory Infrastruktur
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container has-top-divider">
                    <div class="cta-inner section-inner">
                        <div class="cta-header text-center">
                            <h2 class="section-title mt-0">Team</h2>
                            <p class="section-paragraph">Unser Diplomarbeitsteam</p>
                            <div class="team">
                                <div class="team-card">
                                    <img src="dist/images/profiles/kom.png">
                                    <div class="feature-content">
                                    	<h3 class="">Benjamin Komar</h3>
                                    	<p class="text-sm mb-0">Scrum Master</p>
									</div>
                                </div>
                                <div class="team-card">
                                    <img src="dist/images/profiles/muel.png">
                                    <div class="feature-content">
                                    	<h3 class="">Nick Müllner</h3>
                                    	<p class="text-sm mb-0">Product Owner</p>
									</div>
                                </div>
                                <div class="team-card">
                                    <img src="dist/images/profiles/fis.png">
                                    <div class="feature-content">
                                    	<h3 class="">Nick Fischer</h3>
                                    	<p class="text-sm mb-0">Mitarbeiter</p>
									</div>
                                </div>
                                <div class="team-card">
                                    <img src="dist/images/profiles/wai.png">
                                    <div class="feature-content">
                                    	<h3 class="">Yannik Wailzer</h3>
                                    	<p class="text-sm mb-0">Mitarbeiter</p>
									</div>
                                </div>
                            </div>
					    </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container has-top-divider">
                    <div class="cta-inner section-inner">
                        <div class="cta-header text-center">
                            <h2 class="section-title mt-0">Projektstatus</h2>
                            <p class="section-paragraph">Derzeitiger Fortschritt im Projekt</p>
                            <div class="status">
                                <div class="status-card">
                                    <div class="big"><?php echo $project_percent; ?>%</div>
                                    <div class="subtext">Projektfortschritt</div>
                                </div>
                                <div class="status-card">
                                    <div class="big"><?php echo $project_sprints; ?></div>
                                    <div class="subtext">Sprints abgeschlossen</div>
                                </div>
                                <div class="status-card">
                                    <div class="big"><?php echo $project_hours; ?></div>
                                    <div class="subtext">Arbeitsstunden</div>
                                </div>
                            </div>
					    </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container has-top-divider has-bottom-divider">
                    <div class="cta-inner section-inner">
                        <div class="cta-header text-center">
                            <h2 class="section-title mt-0">Partner</h2>
                            <p class="section-paragraph">Unsere Partner und Sponsoren</p>
                            <div class="partner">
                                <div class="partner-card">
                                    <a href="https://www.fabasoft.com"><img src="dist/images/logos/fabasoft-logo.svg"></a>
                                    <div class="subtext">Fabasoft</div>
                                </div>
                                <div class="partner-card">
                                    <a href="https://www.htlrennweg.at"><img src="dist/images/logos/htl3r_logo.png"></a>
                                    <div class="subtext">HTL Rennweg</div>
                                </div>
                            </div>
					    </div>
                    </div>
                </div>
            </section>

            <section class="cta section">
                <div class="container-sm">
                    <div class="cta-inner section-inner">
                        <div class="cta-header text-center">
                            <h2 class="section-title mt-0">Downloads</h2>
                            <p class="section-paragraph">Relevante Dokumente zu unserer Diplomarbeit</p>
                            <div class="cta-inner text-left">
                                <div class="cta-cta download">
                                    <a class="button button-primary" href="./downloads/FAB_Ansuchen.pdf" download="Fabalous_Ansuchen.pdf">Download</a>
                                    <p class="text-sm mb-0">
                                        Ansuchen zur Diplomarbeit
                                    </p>
                                </div>

                                <div class="cta-cta download">
                                    <a class="button button-primary" href="./downloads/FAB_Antrag.pdf" download="Fabalous_Antrag.pdf">Download</a>
                                    <p class="text-sm mb-0">
                                        Antrag zur Diplomarbeit
                                    </p>
                                </div>
                                
                                <!-- <div class="cta-cta download">
                                    <a class="button button-primary" href="">Download</a>
                                    <p class="text-sm mb-0">
                                        Ein anderes Dokument
                                    </p>
                                </div> -->

                            </div>

					    </div>
                    </div>
                </div>
            </section>

			<!-- <section class="cta section">
                <div class="container-sm">
                    <div class="cta-inner section-inner">
                        <div class="cta-header text-center">
                            <h2 class="section-title mt-0">Get it and Switch</h2>
                            <p class="section-paragraph">Lorem ipsum is common placeholder text used to demonstrate the graphic elements of a document or visual presentation.</p>
							<div class="cta-cta">
								<a class="button button-primary" href="#">Buy it now</a>
							</div>
					    </div>
                    </div>
                </div>
            </section> -->
        </main>

        <footer class="site-footer has-top-divider">
            <div class="container">
                <div class="site-footer-inner">
                    <!-- <div class="brand footer-brand">
                        <a href="#">
							<img class="asset-light" src="dist/images/logo-light.svg" alt="Logo">
							<img class="asset-dark" src="dist/images/logo-dark.svg" alt="Logo">
                        </a>
                    </div> -->
                    <div class="footer-part">
                        <b>Impressum</b><br>
                        Website der Diplomarbeit Fabalous<br>
                        an der HTL Rennweg im Schuljahr 2021/2022<br>
                        Offizieller Titel: "Fabalous"<br>
                        Projekt-Nummer: 3R IT 22 07<br>
                        <a href="https://github.com/Tryops/fabalous-project-website">Webseite auf Github</a><br>
                    </div>

                    <div class="footer-part">
                        <b>Projektleitung</b><br>
                        Benjamin Komar<br>
                        E-Mail: <a href="mailto:benjamin.komar@htl.rennweg.at">benjamin.komar@htl.rennweg.at</a>
                    </div>

                    <div class="footer-part">
                        <img src="dist/images/logos/htl3r_logo.png" class="bleach-image" width="100" style="float: right;">
                        <b>Schulstandort</b><br>
                        HTBLA Wien 3 Rennweg<br>
                        Höhere Abteilung für Informationstechnologie<br>
                        (Ausbildungsschwerpunkt Medien-/Netzwerktechnik)<br>
                        Rennweg 89b, 1030 Wien<br>
                        Website: <a href="https://www.htlrennweg.at">www.htlrennweg.at</a><br>
                        E-Mail: <a href="mailto:direktion@htl.rennweg.at">direktion@htl.rennweg.at</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="dist/js/main.min.js"></script>
</body>
</html>
