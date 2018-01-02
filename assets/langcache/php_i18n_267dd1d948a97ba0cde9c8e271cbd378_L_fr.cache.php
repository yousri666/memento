<?php class L {
const header_title = 'Nexxtender configuration';
const header_navtab_1 = 'Configuration';
const header_navtab_2 = 'Diagnostiques';
const header_navtab_3 = 'Calibration';
const button_logout = 'Déconnection';
const button_loading_icon = 'chargement..';
const button_upload = 'uploader';
const button_delete = 'supprimer';
const button_submit = 'envoyer';
const button_apply = 'Appliquer';
const button_close = 'Fermer';
const form_label_logo = 'Choisir un logo:';
const form_label_screen_background = 'Couleur de fond:';
const form_label_button_color = 'Couleur des bouttons:';
const form_label_languages = 'Sélectionner 3 langues:';
const form_label_button_info = 'Bouton d\'info:';
const form_label_global_max_current = 'Courant max global:';
const form_label_default_max_current = 'Courant max de défaut:';
const form_label_connector_nbr = 'Nombre de connecteurs:';
const form_label_specific_max_current = 'Intensité spécifique pour le connecteur';
const form_label_meter_type = 'Type de compteur pour le connecteur';
const form_label_pulse_weight = 'Poid des pulses pour le connecteur';
const form_label_lock_cable_1 = 'Verrouillage du connecteur 1:';
const form_label_lock_cable_2 = 'Verrouillage du connecteur 2:';
const form_label_load_balance = 'Mode charge partagée:';
const form_label_offline_mode = 'Mode hors-ligne:';
const form_label_home_kit = 'Home kit:';
const form_label_reservation_mode = 'Sélectionner un mode de réservation:';
const form_label_active_mode = 'Sélectionner un ou plusieurs modes:';
const form_label_active_interface = 'Interface de communication active:';
const form_label_server_end_point = 'Point d\'accès au serveur:';
const form_label_ssid = 'SSID';
const form_label_psk = 'PSK';
const form_label_static_ip = 'IP statique:';
const form_label_static_ip_address = 'Address IP statique:';
const form_label_submask = 'masque de sous-réseau';
const form_label_gateway = 'passerelle';
const form_label_dns_server_1 = 'Serveur DNS 1:';
const form_label_dns_server = 'Serveur DNS';
const form_help_logo = 'taille max 2000KB (l:262, h:80) et de type:(.png .jpeg, .jpe, .jpg, .gif, .bmp)';
const form_help_screen_background = 'Couleur de fond de l\'écran';
const form_help_button_color = 'Couleur des buttons à l\'écran';
const form_help_languages = 'La preimère langue séléectionnée sera celle utilisée par defaut.Pour changer l\'ordre vous devez d\'abord désélectionner les langues sélectionnnées.';
const form_help_button_info = 'Activer/désactiver le boutton d\'info dans le menu principal';
const form_help_global_max_current = 'La limite maximum de l\'intensité en ampères pour charger pour chaque connecteurs.';
const form_help_default_max_current = 'La limite par defaut de l\'intensité en ampères en mode <<load-contorl>>.
Cette limite est utilisé en début de charge du mode <<load-control>> avant que l\'algotithme de ce ne gère l\'intensité.';
const form_help_connector_nbr = 'Selectionner le nombre de connecteurs disponibles.';
const form_help_specific_max_current = 'Sélectionner une intensité spécifique pour un connecteur.
L\'intensité doit être <= à la limite global max et >= 6A.';
const form_help_meter_type = 'Selectionner le type de compteur d\'énergie pour un connecteur.
- ADE: Compteur d\'énergie interne (actif par default).
- Pulse: Compteur d\'énergie qui génère des pulses.';
const form_help_pulse_weight = 'Spécifier un poid de pulse pour le conteur correspondant à un connecteur.';
const form_help_lock_cable_1 = 'Activer/Désactiver le verrouillage du câble dans le connecteur quand la borne est au repos. 
Si vous désirez verrouillez le câble dans le connecteur, veuillez vous assurez que ce dernier soit bien inséré dans le connecteur.';
const form_help_load_balance = 'Activer/Désactiver le mode de partage de charge. 
Ce mode vous permet de partager en deux l\'intensité max global disponible sur les deux connecteurs uniquement si ces derniers sont effectivement en charge ensemble.';
const form_help_offline_mode = 'Activer/Désactiver le mode hors-ligne.
Si ce mode est activé, la borne ne sauvegardera aucune donnée dans sa mémoire interne et n\'enverra aucune donnée au serveur.';
const form_help_home_kit = 'Activer/Désactiver le support d\'home kit';
const form_help_reservation_mode = 'Disabled: La réservation est désactivée. <br>
OCPP v1.5: La réservation est conforme le protocol OCPP v1.5.<br>
Nexxtmove: La réservation est compatible à la réservation prévu par la plateforme Nexxtmove.';
const form_help_active_mode = 'En choisissant un ou plusieurs mode, le fonctionnement de la borne sera adapté et de nouveaux menus appaîteront.';
const form_help_active_interface = 'Choisir l\'interface réseau active par laquelle la borne communique ses données aux serveur.';
const form_help_server_end_point = 'Vous pouvez changer le point d\'accès du serveur distant. Pour utilisateur averti uniquement!';
const form_help_ssid = 'Le nom du point d\'accès WiFi.';
const form_help_psk = 'le mot de pass du point d\'accès WiFi associé';
const form_help_static_ip = 'Si le boutton est désactivé, l\'adresse IP sera assigné automatiquement par votre routeur via le protocol DHCP. 
Si le boutton est active, vous devrez spécifiez une adresse IP de votre choix, compatible avec la configuration de votre réseau. Pour utilisateur averti uniquement!';
const form_help_dns_server_1 = 'Ajouter jusqu\'à 4 serveurs DNS. 
Ces serveurs traduisent les noms de domaine Internet en adresses IP. Pour utilisateur averti uniquement!';
const form_input_connector_nbr_data_on = 'Double';
const form_input_connector_bnr_data_off = 'Simple';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}