<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/annonces' => [[['_route' => 'annonces', '_controller' => 'App\\Controller\\Admin\\AnnonceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/annonces/table' => [[['_route' => 'annonces.table', '_controller' => 'App\\Controller\\Admin\\AnnonceController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/annonces/create' => [[['_route' => 'annonces.create', '_controller' => 'App\\Controller\\Admin\\AnnonceController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categories/table' => [[['_route' => 'categories.table', '_controller' => 'App\\Controller\\Admin\\CategoryController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categories/create' => [[['_route' => 'categories.create', '_controller' => 'App\\Controller\\Admin\\CategoryController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/cronjobs' => [[['_route' => 'cronjobs', '_controller' => 'App\\Controller\\Admin\\CronJobsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/cronjobs/table' => [[['_route' => 'cronjobs.table', '_controller' => 'App\\Controller\\Admin\\CronJobsController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/file/upload' => [[['_route' => 'file.upload', '_controller' => 'App\\Controller\\Admin\\FileController::upload'], null, ['POST' => 0], null, false, false, null]],
        '/admin/mail/history' => [[['_route' => 'mail.history', '_controller' => 'App\\Controller\\Admin\\MailHistoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/mail/history/table' => [[['_route' => 'mail.history.table', '_controller' => 'App\\Controller\\Admin\\MailHistoryController::table'], null, ['GET' => 0], null, false, false, null]],
        '/test-mapquest' => [[['_route' => 'admin_test_mapquest', '_controller' => 'App\\Controller\\Admin\\MapQuestController::calculateRoute'], null, null, null, false, false, null]],
        '/admin/marques' => [[['_route' => 'marques', '_controller' => 'App\\Controller\\Admin\\MarqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/marque/table' => [[['_route' => 'marque.table', '_controller' => 'App\\Controller\\Admin\\MarqueController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/marque/create' => [[['_route' => 'marque.create', '_controller' => 'App\\Controller\\Admin\\MarqueController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/modeles' => [[['_route' => 'modeles', '_controller' => 'App\\Controller\\Admin\\ModeleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/modele/table' => [[['_route' => 'modele.table', '_controller' => 'App\\Controller\\Admin\\ModeleController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/modele/create' => [[['_route' => 'modele.create', '_controller' => 'App\\Controller\\Admin\\ModeleController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/navettes' => [[['_route' => 'navettes', '_controller' => 'App\\Controller\\Admin\\NavetteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/navettes/mapquest' => [[['_route' => 'navettes.mapquest', '_controller' => 'App\\Controller\\Admin\\NavetteController::calculateRoute'], null, ['GET' => 0], null, false, false, null]],
        '/admin/navettes/table' => [[['_route' => 'navettes.table', '_controller' => 'App\\Controller\\Admin\\NavetteController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/navettes/batch' => [[['_route' => 'navettes.batch', '_controller' => 'App\\Controller\\Admin\\NavetteController::batch'], null, ['GET' => 0], null, false, false, null]],
        '/admin/navettes/create' => [[['_route' => 'navettes.create', '_controller' => 'App\\Controller\\Admin\\NavetteController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/pickups' => [[['_route' => 'pickups', '_controller' => 'App\\Controller\\Admin\\PickupController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/pickups/table' => [[['_route' => 'pickups.table', '_controller' => 'App\\Controller\\Admin\\PickupController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/pickups/create' => [[['_route' => 'pickups.create', '_controller' => 'App\\Controller\\Admin\\PickupController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reclamations' => [[['_route' => 'reclamations', '_controller' => 'App\\Controller\\Admin\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reclamations/table' => [[['_route' => 'reclamations.table', '_controller' => 'App\\Controller\\Admin\\ReclamationController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reclamations/export' => [[['_route' => 'reclamations.export', '_controller' => 'App\\Controller\\Admin\\ReclamationController::export'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reclamations/create' => [[['_route' => 'reclamations.create', '_controller' => 'App\\Controller\\Admin\\ReclamationController::create'], null, ['GET' => 0], null, false, false, null]],
        '/reports/list' => [[['_route' => 'reports_list', '_controller' => 'App\\Controller\\Admin\\ReportController::list'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'get_detailed_report', '_controller' => 'App\\Controller\\Admin\\ReportController::getPlaningCircuitsJournalier'], null, null, null, false, false, null]],
        '/users/gps_report' => [[['_route' => 'get_zones_report', '_controller' => 'App\\Controller\\Admin\\ReportController::getZonesEtPointsAarrêtActives'], null, null, null, false, false, null]],
        '/reservation-hours' => [[['_route' => 'get_reservation_hours', '_controller' => 'App\\Controller\\Admin\\ReportController::getTranchesHorairesActives'], null, null, null, false, false, null]],
        '/users' => [
            [['_route' => 'get_planning_journalier_reservation', '_controller' => 'App\\Controller\\Admin\\ReportController::getReportPlanningJournalier'], null, null, null, false, false, null],
            [['_route' => 'get_inscrit_users', '_controller' => 'App\\Controller\\Admin\\ReportController::getReportHistoriqueInscrits'], null, null, null, false, false, null],
            [['_route' => 'get_deinscrit_users', '_controller' => 'App\\Controller\\Admin\\ReportController::getReportHistoriqueDeinscrits'], null, null, null, false, false, null],
        ],
        '/admin/reporting' => [[['_route' => 'reporting', '_controller' => 'App\\Controller\\Admin\\ReportController::reportsList'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reporting/trajets' => [[['_route' => 'reporting_trajets', '_controller' => 'App\\Controller\\Admin\\ReportingController::trajets'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/media-countries' => [[['_route' => 'reporting.media-countries', '_controller' => 'App\\Controller\\Admin\\ReportingController::mediaCountries'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/medias-per-country' => [[['_route' => 'reporting.medias_per_country', '_controller' => 'App\\Controller\\Admin\\ReportingController::mediasPerCountry'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/medias-per-category' => [[['_route' => 'reporting.medias_per_category', '_controller' => 'App\\Controller\\Admin\\ReportingController::visitesPerDirection'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/links-per-media' => [[['_route' => 'reporting.links_per_media', '_controller' => 'App\\Controller\\Admin\\ReportingController::linksPerMedia'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/medias-per-language' => [[['_route' => 'reporting.medias_per_language', '_controller' => 'App\\Controller\\Admin\\ReportingController::mediasPerLanguage'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/map' => [[['_route' => 'reporting.map', '_controller' => 'App\\Controller\\Admin\\ReportingController::map'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'reservations', '_controller' => 'App\\Controller\\Admin\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservations/recap' => [[['_route' => 'reservations.recap', '_controller' => 'App\\Controller\\Admin\\ReservationController::recap'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservations/table' => [[['_route' => 'reservations.table', '_controller' => 'App\\Controller\\Admin\\ReservationController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservations/export' => [[['_route' => 'reservations.export', '_controller' => 'App\\Controller\\Admin\\ReservationController::export'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservations/create' => [[['_route' => 'reservations.create', '_controller' => 'App\\Controller\\Admin\\ReservationController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservation_entries' => [[['_route' => 'reservation_entries', '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/create_navettes' => [[['_route' => 'create_navettes', '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::createNavettes'], null, ['POST' => 0], null, false, false, null]],
        '/admin/reservation_entries/table' => [[['_route' => 'reservation_entries.table', '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservation_entries/export' => [[['_route' => 'reservation_entries.export', '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::export'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservation_entries/recap' => [[['_route' => 'reservation_entries.recap', '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::recap'], null, ['GET' => 0], null, false, false, null]],
        '/admin/settings' => [[['_route' => 'settings', '_controller' => 'App\\Controller\\Admin\\SettingController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/settings/table' => [[['_route' => 'settings.table', '_controller' => 'App\\Controller\\Admin\\SettingController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/settings/create' => [[['_route' => 'setting.create', '_controller' => 'App\\Controller\\Admin\\SettingController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/shifts' => [[['_route' => 'shifts', '_controller' => 'App\\Controller\\Admin\\ShiftController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/shifts/table' => [[['_route' => 'shifts.table', '_controller' => 'App\\Controller\\Admin\\ShiftController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/shifts/create' => [[['_route' => 'shifts.create', '_controller' => 'App\\Controller\\Admin\\ShiftController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/sites' => [[['_route' => 'sites', '_controller' => 'App\\Controller\\Admin\\SiteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/sites/table' => [[['_route' => 'sites.table', '_controller' => 'App\\Controller\\Admin\\SiteController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/sites/create' => [[['_route' => 'sites.create', '_controller' => 'App\\Controller\\Admin\\SiteController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/societes' => [[['_route' => 'societes', '_controller' => 'App\\Controller\\Admin\\SocieteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/societes/table' => [[['_route' => 'societes.table', '_controller' => 'App\\Controller\\Admin\\SocieteController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/societe/create' => [[['_route' => 'societe.create', '_controller' => 'App\\Controller\\Admin\\SocieteController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tarifs' => [[['_route' => 'tarifs', '_controller' => 'App\\Controller\\Admin\\TarifController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tarifs/table' => [[['_route' => 'tarifs.table', '_controller' => 'App\\Controller\\Admin\\TarifController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tarifs/create' => [[['_route' => 'tarifs.create', '_controller' => 'App\\Controller\\Admin\\TarifController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/trajets' => [[['_route' => 'trajets', '_controller' => 'App\\Controller\\Admin\\TrajetController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/trajets/optimize' => [[['_route' => 'trajets.optimize', '_controller' => 'App\\Controller\\Admin\\TrajetController::optimize'], null, ['GET' => 0], null, false, false, null]],
        '/admin/trajets/map' => [[['_route' => 'trajets.map', '_controller' => 'App\\Controller\\Admin\\TrajetController::showMap'], null, ['GET' => 0], null, false, false, null]],
        '/admin/trajets/table' => [[['_route' => 'trajets.table', '_controller' => 'App\\Controller\\Admin\\TrajetController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/trajets/create' => [[['_route' => 'trajets.create', '_controller' => 'App\\Controller\\Admin\\TrajetController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/table' => [[['_route' => 'users.table', '_controller' => 'App\\Controller\\Admin\\UserController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/adhesion' => [[['_route' => 'user.adhesion', '_controller' => 'App\\Controller\\Admin\\UserController::adhesion'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/location' => [[['_route' => 'user.location', '_controller' => 'App\\Controller\\Admin\\UserController::location'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/create' => [[['_route' => 'user.create', '_controller' => 'App\\Controller\\Admin\\UserController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/import' => [[['_route' => 'users.import', '_controller' => 'App\\Controller\\Admin\\UserController::import'], null, null, null, false, false, null]],
        '/admin/users/export' => [[['_route' => 'users.export', '_controller' => 'App\\Controller\\Admin\\UserController::export'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vehicules' => [[['_route' => 'vehicules', '_controller' => 'App\\Controller\\Admin\\VehiculeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vehicules/table' => [[['_route' => 'vehicules.table', '_controller' => 'App\\Controller\\Admin\\VehiculeController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vehicules/export' => [[['_route' => 'vehicules.export', '_controller' => 'App\\Controller\\Admin\\VehiculeController::export'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vehicule/create' => [[['_route' => 'vehicule.create', '_controller' => 'App\\Controller\\Admin\\VehiculeController::create'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\Front\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/services' => [[['_route' => 'services', '_controller' => 'App\\Controller\\Front\\HomeController::services'], null, ['GET' => 0], null, false, false, null]],
        '/pricing' => [[['_route' => 'pricing', '_controller' => 'App\\Controller\\Front\\HomeController::pricing'], null, ['GET' => 0], null, false, false, null]],
        '/customers' => [[['_route' => 'customers', '_controller' => 'App\\Controller\\Front\\HomeController::customers'], null, ['GET' => 0], null, false, false, null]],
        '/ressources' => [[['_route' => 'ressources', '_controller' => 'App\\Controller\\Front\\HomeController::ressources'], null, ['GET' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\Front\\HomeController::contact'], null, ['GET' => 0], null, false, false, null]],
        '/password/reset' => [[['_route' => 'password.reset', '_controller' => 'App\\Controller\\Front\\PasswordResetController::reset'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\Front\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\Front\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\Front\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\Front\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\Front\\SecurityController::signup'], null, null, null, false, false, null]],
        '/oauth/connect/azure' => [[['_route' => 'connect_azure_start', '_controller' => 'App\\Controller\\Front\\Security\\ConnectAzureController::connectAction'], null, null, null, false, false, null]],
        '/oauth/check-azure' => [
            [['_route' => 'connect_azure_check', '_controller' => 'App\\Controller\\Front\\Security\\ConnectAzureController::connectCheckAction'], null, null, null, false, false, null],
            [['_route' => 'azure_login'], null, null, null, false, false, null],
        ],
        '/oauth/login' => [[['_route' => 'hwi_oauth_connect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\LoginController::connectAction'], null, null, null, true, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/webpush' => [[['_route' => 'bentools_webpush.subscription', '_controller' => 'BenTools\\WebPushBundle\\Action\\RegisterSubscriptionAction'], null, ['POST' => 0, 'DELETE' => 1], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|annonces/([^/]++)/(?'
                        .'|de(?'
                            .'|tails(*:48)'
                            .'|lete(*:59)'
                        .')'
                        .'|update(*:73)'
                        .'|store(*:85)'
                    .')'
                    .'|c(?'
                        .'|ategories/([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:129)'
                                .'|lete(*:141)'
                            .')'
                            .'|update(*:156)'
                            .'|store(*:169)'
                        .')'
                        .'|ronjobs/([^/]++)/change\\-status(*:209)'
                    .')'
                    .'|logs(?'
                        .'|(?:/([^/]++)(?:/([^/]++))?)?(*:253)'
                        .'|/([^/]++)/([^/]++)/table(*:285)'
                    .')'
                    .'|m(?'
                        .'|a(?'
                            .'|il/history/([^/]++)/(?'
                                .'|resend(*:331)'
                                .'|show(*:343)'
                            .')'
                            .'|rque/([^/]++)/(?'
                                .'|update(*:375)'
                                .'|store(*:388)'
                                .'|delete(*:402)'
                            .')'
                        .')'
                        .'|odele/([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:440)'
                                .'|lete(*:452)'
                            .')'
                            .'|update(*:467)'
                            .'|store(*:480)'
                        .')'
                    .')'
                    .'|navettes/([^/]++)/(?'
                        .'|add/([^/]++)(*:523)'
                        .'|de(?'
                            .'|ta(?'
                                .'|ch/([^/]++)(*:552)'
                                .'|ils(*:563)'
                            .')'
                            .'|lete(*:576)'
                        .')'
                        .'|rese(?'
                            .'|t(*:593)'
                            .'|rver(*:605)'
                        .')'
                        .'|c(?'
                            .'|lone(*:622)'
                            .'|heckin(*:636)'
                            .'|ancel(*:649)'
                            .'|omment(*:663)'
                        .')'
                        .'|update(*:678)'
                        .'|store(*:691)'
                        .'|precommande(*:710)'
                        .'|notify(*:724)'
                        .'|enable(*:738)'
                        .'|order(*:751)'
                    .')'
                    .'|pickups/([^/]++)/(?'
                        .'|de(?'
                            .'|tails(*:790)'
                            .'|lete(*:802)'
                        .')'
                        .'|update(*:817)'
                        .'|store(*:830)'
                    .')'
                    .'|re(?'
                        .'|clamations/([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:877)'
                                .'|lete(*:889)'
                            .')'
                            .'|update(*:904)'
                            .'|store(*:917)'
                        .')'
                        .'|servation(?'
                            .'|s/([^/]++)/(?'
                                .'|de(?'
                                    .'|tails(*:962)'
                                    .'|lete(*:974)'
                                .')'
                                .'|update(*:989)'
                                .'|store(*:1002)'
                                .'|annuler(*:1018)'
                                .'|enable(*:1033)'
                            .')'
                            .'|_entries/([^/]++)/(?'
                                .'|de(?'
                                    .'|tails(*:1074)'
                                    .'|lete(*:1087)'
                                .')'
                                .'|update(*:1103)'
                                .'|store(*:1117)'
                                .'|validate(*:1134)'
                                .'|navette(*:1150)'
                                .'|annuler(*:1166)'
                                .'|checkin(*:1182)'
                            .')'
                        .')'
                    .')'
                    .'|s(?'
                        .'|ettings/([^/]++)/(?'
                            .'|update(*:1224)'
                            .'|store(*:1238)'
                        .')'
                        .'|hifts/([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:1276)'
                                .'|lete(*:1289)'
                            .')'
                            .'|update(*:1305)'
                            .'|store(*:1319)'
                        .')'
                        .'|ites/([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:1356)'
                                .'|lete(*:1369)'
                            .')'
                            .'|update(*:1385)'
                            .'|store(*:1399)'
                        .')'
                        .'|ociete/([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:1438)'
                                .'|lete(*:1451)'
                            .')'
                            .'|update(*:1467)'
                            .'|store(*:1481)'
                        .')'
                    .')'
                    .'|t(?'
                        .'|arifs/([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:1524)'
                                .'|lete(*:1537)'
                            .')'
                            .'|update(*:1553)'
                            .'|store(*:1567)'
                        .')'
                        .'|rajets/([^/]++)/(?'
                            .'|affecter(*:1604)'
                            .'|de(?'
                                .'|tails(*:1623)'
                                .'|lete(*:1636)'
                            .')'
                            .'|c(?'
                                .'|heckin(*:1656)'
                                .'|lone(*:1669)'
                            .')'
                            .'|update(*:1685)'
                            .'|store(*:1699)'
                            .'|pickup(*:1714)'
                        .')'
                    .')'
                    .'|user/([^/]++)/(?'
                        .'|d(?'
                            .'|e(?'
                                .'|tails(*:1755)'
                                .'|lete(*:1768)'
                            .')'
                            .'|isable(*:1784)'
                        .')'
                        .'|enable(*:1800)'
                        .'|update(*:1815)'
                        .'|store(*:1829)'
                    .')'
                    .'|vehicule/([^/]++)/(?'
                        .'|de(?'
                            .'|tails(*:1870)'
                            .'|lete(*:1883)'
                        .')'
                        .'|update(*:1899)'
                        .'|store(*:1913)'
                    .')'
                .')'
                .'|/navettes/([^/]++)/bulk\\-add(*:1952)'
                .'|/generate\\-report/([^/]++)(?'
                    .'|(*:1990)'
                    .'|/preview(*:2007)'
                .')'
                .'|/password/new/([^/]++)(*:2039)'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:2076)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:2116)'
                    .'|wdt/([^/]++)(*:2137)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:2184)'
                            .'|router(*:2199)'
                            .'|exception(?'
                                .'|(*:2220)'
                                .'|\\.css(*:2234)'
                            .')'
                        .')'
                        .'|(*:2245)'
                    .')'
                .')'
                .'|/oauth/connect/(?'
                    .'|([^/]++)(*:2282)'
                    .'|service/([^/]++)(*:2307)'
                    .'|registration/([^/]++)(*:2337)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'annonces.details', '_controller' => 'App\\Controller\\Admin\\AnnonceController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        59 => [[['_route' => 'annonces.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\AnnonceController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        73 => [[['_route' => 'annonces.update', '_controller' => 'App\\Controller\\Admin\\AnnonceController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        85 => [[['_route' => 'annonces.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\AnnonceController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        129 => [[['_route' => 'categories.details', '_controller' => 'App\\Controller\\Admin\\CategoryController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        141 => [[['_route' => 'categories.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        156 => [[['_route' => 'categories.update', '_controller' => 'App\\Controller\\Admin\\CategoryController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        169 => [[['_route' => 'categories.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\CategoryController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        209 => [[['_route' => 'cronjobs.change_status', '_controller' => 'App\\Controller\\Admin\\CronJobsController::changeStatus'], ['id'], ['GET' => 0], null, false, false, null]],
        253 => [[['_route' => 'logs', 'entity_name' => null, 'entity_id' => null, '_controller' => 'App\\Controller\\Admin\\LogController::index'], ['entity_name', 'entity_id'], ['GET' => 0], null, false, true, null]],
        285 => [[['_route' => 'logs.table', 'entity_name' => null, 'entity_id' => null, '_controller' => 'App\\Controller\\Admin\\LogController::table'], ['entity_name', 'entity_id'], ['GET' => 0], null, false, false, null]],
        331 => [[['_route' => 'mail.history.resend', '_controller' => 'App\\Controller\\Admin\\MailHistoryController::resend'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'mail.history.show', '_controller' => 'App\\Controller\\Admin\\MailHistoryController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        375 => [[['_route' => 'marque.update', '_controller' => 'App\\Controller\\Admin\\MarqueController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        388 => [[['_route' => 'marque.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\MarqueController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        402 => [[['_route' => 'marque.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\MarqueController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        440 => [[['_route' => 'modele.details', '_controller' => 'App\\Controller\\Admin\\ModeleController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        452 => [[['_route' => 'modele.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ModeleController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        467 => [[['_route' => 'modele.update', '_controller' => 'App\\Controller\\Admin\\ModeleController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        480 => [[['_route' => 'modele.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ModeleController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        523 => [[['_route' => 'navettes.add', '_controller' => 'App\\Controller\\Admin\\NavetteController::add'], ['id', 'entry_id'], ['GET' => 0], null, false, true, null]],
        552 => [[['_route' => 'navettes.detach', '_controller' => 'App\\Controller\\Admin\\NavetteController::detach'], ['id', 'entry_id'], ['GET' => 0], null, false, true, null]],
        563 => [[['_route' => 'navettes.details', '_controller' => 'App\\Controller\\Admin\\NavetteController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        576 => [[['_route' => 'navettes.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\NavetteController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        593 => [[['_route' => 'navettes.reset', '_controller' => 'App\\Controller\\Admin\\NavetteController::reset'], ['id'], ['GET' => 0], null, false, false, null]],
        605 => [[['_route' => 'navettes.reserver', '_controller' => 'App\\Controller\\Admin\\NavetteController::reserver'], ['id'], ['POST' => 0], null, false, false, null]],
        622 => [[['_route' => 'navettes.clone', '_controller' => 'App\\Controller\\Admin\\NavetteController::clone'], ['id'], ['GET' => 0], null, false, false, null]],
        636 => [[['_route' => 'app_admin_navette_checkin', '_controller' => 'App\\Controller\\Admin\\NavetteController::checkin'], ['id'], ['GET' => 0], null, false, false, null]],
        649 => [[['_route' => 'navettes.cancel', '_controller' => 'App\\Controller\\Admin\\NavetteController::cancel'], ['id'], ['GET' => 0], null, false, false, null]],
        663 => [[['_route' => 'app_admin_navette_comment', '_controller' => 'App\\Controller\\Admin\\NavetteController::comment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        678 => [[['_route' => 'navettes.update', '_controller' => 'App\\Controller\\Admin\\NavetteController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        691 => [[['_route' => 'navettes.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\NavetteController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        710 => [[['_route' => 'navettes.precommande', '_controller' => 'App\\Controller\\Admin\\NavetteController::precommande'], ['id'], ['GET' => 0], null, false, false, null]],
        724 => [[['_route' => 'navettes.notify', '_controller' => 'App\\Controller\\Admin\\NavetteController::Notify'], ['id'], ['GET' => 0], null, false, false, null]],
        738 => [[['_route' => 'navettes.enable', '_controller' => 'App\\Controller\\Admin\\NavetteController::enable'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        751 => [[['_route' => 'navettes.order', '_controller' => 'App\\Controller\\Admin\\NavetteController::order'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        790 => [[['_route' => 'pickups.details', '_controller' => 'App\\Controller\\Admin\\PickupController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        802 => [[['_route' => 'pickups.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\PickupController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        817 => [[['_route' => 'pickups.update', '_controller' => 'App\\Controller\\Admin\\PickupController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        830 => [[['_route' => 'pickups.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\PickupController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        877 => [[['_route' => 'reclamations.details', '_controller' => 'App\\Controller\\Admin\\ReclamationController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        889 => [[['_route' => 'reclamations.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ReclamationController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        904 => [[['_route' => 'reclamations.update', '_controller' => 'App\\Controller\\Admin\\ReclamationController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        917 => [[['_route' => 'reclamations.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ReclamationController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        962 => [[['_route' => 'reservations.details', '_controller' => 'App\\Controller\\Admin\\ReservationController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        974 => [[['_route' => 'reservations.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ReservationController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        989 => [[['_route' => 'reservations.update', '_controller' => 'App\\Controller\\Admin\\ReservationController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        1002 => [[['_route' => 'reservations.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ReservationController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        1018 => [[['_route' => 'reservations.annuler', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ReservationController::annuler'], ['id'], ['GET' => 0], null, false, false, null]],
        1033 => [[['_route' => 'reservations.enable', '_controller' => 'App\\Controller\\Admin\\ReservationController::enable'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1074 => [[['_route' => 'reservation_entries.details', '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        1087 => [[['_route' => 'reservation_entries.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1103 => [[['_route' => 'reservation_entries.update', '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        1117 => [[['_route' => 'reservation_entries.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        1134 => [[['_route' => 'reservation_entries.validate', '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::validate'], ['id'], ['GET' => 0], null, false, false, null]],
        1150 => [[['_route' => 'reservation_entries.navette', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::navette'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1166 => [[['_route' => 'reservation_entries.annuler', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::annuler'], ['id'], ['GET' => 0], null, false, false, null]],
        1182 => [[['_route' => 'reservation_entries.checkin', '_controller' => 'App\\Controller\\Admin\\ReservationEntriesController::checkin'], ['token'], ['GET' => 0], null, false, false, null]],
        1224 => [[['_route' => 'setting.update', '_controller' => 'App\\Controller\\Admin\\SettingController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        1238 => [[['_route' => 'setting.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\SettingController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        1276 => [[['_route' => 'shifts.details', '_controller' => 'App\\Controller\\Admin\\ShiftController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        1289 => [[['_route' => 'shifts.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ShiftController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1305 => [[['_route' => 'shifts.update', '_controller' => 'App\\Controller\\Admin\\ShiftController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        1319 => [[['_route' => 'shifts.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\ShiftController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        1356 => [[['_route' => 'sites.details', '_controller' => 'App\\Controller\\Admin\\SiteController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        1369 => [[['_route' => 'sites.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\SiteController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1385 => [[['_route' => 'sites.update', '_controller' => 'App\\Controller\\Admin\\SiteController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        1399 => [[['_route' => 'sites.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\SiteController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        1438 => [[['_route' => 'societe.details', '_controller' => 'App\\Controller\\Admin\\SocieteController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        1451 => [[['_route' => 'societe.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\SocieteController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1467 => [[['_route' => 'societe.update', '_controller' => 'App\\Controller\\Admin\\SocieteController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        1481 => [[['_route' => 'societe.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\SocieteController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        1524 => [[['_route' => 'tarifs.details', '_controller' => 'App\\Controller\\Admin\\TarifController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        1537 => [[['_route' => 'tarifs.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\TarifController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1553 => [[['_route' => 'tarifs.update', '_controller' => 'App\\Controller\\Admin\\TarifController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        1567 => [[['_route' => 'tarifs.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\TarifController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        1604 => [[['_route' => 'app_admin_trajet_affecter', '_controller' => 'App\\Controller\\Admin\\TrajetController::affecter'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1623 => [[['_route' => 'trajets.details', '_controller' => 'App\\Controller\\Admin\\TrajetController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        1636 => [[['_route' => 'trajets.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\TrajetController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1656 => [[['_route' => 'app_admin_trajet_checkin', '_controller' => 'App\\Controller\\Admin\\TrajetController::checkin'], ['id'], ['GET' => 0], null, false, false, null]],
        1669 => [[['_route' => 'trajets.clone', '_controller' => 'App\\Controller\\Admin\\TrajetController::clone'], ['id'], ['GET' => 0], null, false, false, null]],
        1685 => [[['_route' => 'trajets.update', '_controller' => 'App\\Controller\\Admin\\TrajetController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        1699 => [[['_route' => 'trajets.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\TrajetController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        1714 => [[['_route' => 'trajets.pickup', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\TrajetController::pickup'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1755 => [[['_route' => 'user.details', '_controller' => 'App\\Controller\\Admin\\UserController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        1768 => [[['_route' => 'user.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1784 => [[['_route' => 'user.disable', '_controller' => 'App\\Controller\\Admin\\UserController::disable'], ['id'], ['GET' => 0], null, false, false, null]],
        1800 => [[['_route' => 'user.enable', '_controller' => 'App\\Controller\\Admin\\UserController::enable'], ['id'], ['GET' => 0], null, false, false, null]],
        1815 => [[['_route' => 'user.update', '_controller' => 'App\\Controller\\Admin\\UserController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        1829 => [[['_route' => 'user.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\UserController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        1870 => [[['_route' => 'vehicule.details', '_controller' => 'App\\Controller\\Admin\\VehiculeController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        1883 => [[['_route' => 'vehicule.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\VehiculeController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1899 => [[['_route' => 'vehicule.update', '_controller' => 'App\\Controller\\Admin\\VehiculeController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        1913 => [[['_route' => 'vehicule.store', '_controller' => 'App\\Controller\\Admin\\VehiculeController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        1952 => [[['_route' => 'navettes.bulk_add', '_controller' => 'App\\Controller\\Admin\\NavetteController::bulkAdd'], ['id'], ['POST' => 0], null, false, false, null]],
        1990 => [[['_route' => 'generate_report', '_controller' => 'App\\Controller\\Admin\\ReportController::generateReport'], ['reportType'], ['GET' => 0], null, false, true, null]],
        2007 => [[['_route' => 'preview_report', '_controller' => 'App\\Controller\\Admin\\ReportController::previewReport'], ['reportType'], ['GET' => 0], null, false, false, null]],
        2039 => [[['_route' => 'password.new', '_controller' => 'App\\Controller\\Front\\PasswordResetController::new'], ['token'], null, null, false, true, null]],
        2076 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        2116 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        2137 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        2184 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        2199 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        2220 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        2234 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        2245 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        2282 => [[['_route' => 'hwi_oauth_service_redirect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\RedirectToServiceController::redirectToServiceAction'], ['service'], null, null, false, true, null]],
        2307 => [[['_route' => 'hwi_oauth_connect_service', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction'], ['service'], null, null, false, true, null]],
        2337 => [
            [['_route' => 'hwi_oauth_connect_registration', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction'], ['key'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
