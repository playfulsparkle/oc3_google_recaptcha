<?php
// Heading
$_['heading_title']                    = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_getting_started']          = 'Démarrage';
$_['heading_setup']                    = 'Configuration de Google reCAPTCHA';
$_['heading_troubleshot']              = 'Dépannage courant';
$_['heading_faq']                      = 'FAQ';
$_['heading_contact']                  = 'Contacter le support';
$_['heading_v3_score_threshold']       = 'Seuil de score';

// Text
$_['text_extension']                   = 'Extensions';
$_['text_success']                     = 'Succès : Vous avez modifié Google reCAPTCHA !';
$_['text_edit']                        = 'Modifier Google reCAPTCHA';
$_['text_signup']                      = 'Allez sur la <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">page Google reCAPTCHA</a> et enregistrez votre site web.';
$_['text_getting_started']             = '<p><strong>Vue d\'ensemble :</strong> Playful Sparkle - Google reCAPTCHA est une extension avancée pour OpenCart 4, conçue pour protéger votre boutique contre le spam et les abus. Elle prend en charge plusieurs implémentations de Google reCAPTCHA, y compris Score-based (v3), Checkbox (v2), et Invisible (v2), offrant flexibilité et sécurité accrue pour votre boutique.</p><p><strong>Exigences :</strong> OpenCart 4.x+, PHP 7.4+ ou supérieur</p>';
$_['text_setup']                       = '<ul><li><strong>Étape 1 :</strong> Obtenez votre Clé de site reCAPTCHA et votre Clé secrète depuis la <a href="https://www.google.com/recaptcha/admin/create" target="_blank" rel="noopener noreferrer">console d\'administration Google reCAPTCHA</a>.</li><li><strong>Étape 2 :</strong> Dans votre panneau d\'administration OpenCart, accédez aux paramètres de l\'extension et choisissez l\'implémentation reCAPTCHA que vous souhaitez utiliser (basée sur le score v3, case à cocher v2, ou invisible v2).</li><li><strong>Étape 3 :</strong> Personnalisez vos paramètres en fonction de l\'implémentation choisie :<ul><li>Pour Score basé (v3) : Définissez la position du badge (en bas à gauche, en bas à droite, ou en ligne). Pour en ligne, choisissez un thème clair ou sombre, ou masquez le badge (avec un avis dans le pied de page pour se conformer à la politique de Google).</li><li>Pour Challenge (v2) Case à cocher : Définissez le thème du badge (clair ou sombre) et la taille (normale ou compacte).</li><li>Pour Challenge (v2) Invisible : Définissez la position du badge (en bas à gauche, en bas à droite, ou en ligne). Pour en ligne, choisissez un thème clair ou sombre.</li></ul></li><li><strong>Étape 4 :</strong> Configurez reCAPTCHA pour les pages souhaitées dans la page de paramètres OpenCart.</li><li><strong>Étape 5 :</strong> Rafraîchissez le cache de modification pour appliquer les changements. Pour ce faire :<ul><li>Allez dans <strong>Extensions</strong> &gt; <strong>Modifications</strong> dans votre panneau d\'administration OpenCart.</li><li>Cliquez sur le bouton bleu <strong>Rafraîchir</strong> dans le coin supérieur droit de la page.</li></ul>Cette étape garantit que les paramètres reCAPTCHA mis à jour sont correctement appliqués à votre boutique.</li></ul>';
$_['text_troubleshot']                 = '<ul><li><strong>Problème :</strong> reCAPTCHA ne s\'affiche pas. <strong>Solution :</strong> Assurez-vous que la Clé de site et la Clé secrète sont correctement saisies, et confirmez que votre domaine est enregistré dans la console d\'administration Google reCAPTCHA. De plus, assurez-vous de rafraîchir le cache de modification après avoir effectué des modifications.</li><li><strong>Problème :</strong> Un message d\'erreur apparaît pendant la validation. <strong>Solution :</strong> Vérifiez que la paire de clés correspond à l\'implémentation reCAPTCHA (par exemple, les clés de la case à cocher v2 ne peuvent pas être utilisées pour v3).</li><li><strong>Problème :</strong> La personnalisation du badge ne s\'affiche pas comme prévu. <strong>Solution :</strong> Vérifiez à nouveau les paramètres de configuration du badge (par exemple, position, thème ou taille), assurez-vous que le cache est vidé et rafraîchissez le cache de modification.</li></ul>';
$_['text_faq']                         = '<details><summary>Quelle implémentation reCAPTCHA devrais-je choisir ?</summary> Cela dépend de vos besoins :<ul><li><strong>Score-based (v3) :</strong> Idéal pour une expérience utilisateur fluide sans interaction directe, utile pour une validation en arrière-plan.</li><li><strong>Checkbox (v2) :</strong> Ajoute une case "Je ne suis pas un robot" pour une interaction visible, parfaite pour les formulaires visibles par les utilisateurs.</li><li><strong>Invisible (v2) :</strong> Valide les requêtes en arrière-plan sans interaction de l\'utilisateur, idéal pour des interfaces plus épurées avec un badge en option.</li></ul></details><details><summary>Pourquoi puis-je obtenir l\'erreur "Clé de site invalide" ?</summary> Cela se produit lorsque les clés saisies ne correspondent pas à l\'implémentation reCAPTCHA que vous avez choisie. Assurez-vous d\'utiliser la paire de clés correcte pour l\'implémentation choisie (par exemple, des clés v3 pour v3, des clés v2 Checkbox pour v2 Checkbox, etc.).</details><details><summary>Où puis-je activer reCAPTCHA ?</summary> reCAPTCHA peut être configuré pour différentes pages dans la page de paramètres OpenCart.</details>';
$_['text_contact']                     = '<p>Pour toute assistance supplémentaire, veuillez contacter notre équipe de support :</p><ul><li><strong>Contact :</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation :</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentation de l\'utilisateur</a></li></ul>';
$_['text_key_type_v3']                 = 'Score-based (v3) - Vérifiez les requêtes avec un score';
$_['text_key_type_v2_checkbox']        = 'Challenge (v2) - Case à cocher "Je ne suis pas un robot"';
$_['text_key_type_v2_invisible']       = 'Challenge (v2) - Badge invisible reCAPTCHA';
$_['text_badge_inline']                = 'En ligne';
$_['text_badge_bottom_left']           = 'En bas à gauche';
$_['text_badge_bottom_right']          = 'En bas à droite';
$_['text_badge_dark']                  = 'Foncé';
$_['text_badge_light']                 = 'Clair';
$_['text_badge_compact']               = 'Compact';
$_['text_badge_normal']                = 'Normal';
$_['text_badge_invisible']             = 'Invisible';
$_['text_csp_info']                    = 'Assurez-vous que votre politique de sécurité du contenu (CSP) est correctement configurée pour fonctionner avec Google reCAPTCHA. Nous recommandons d\'utiliser l\'<strong>approche basée sur le nonce de CSP3</strong> pour une sécurité maximale. Sinon, incluez <strong>script-src</strong> pour autoriser <strong>https://www.google.com/recaptcha/</strong> et <strong>https://www.gstatic.com/recaptcha/</strong>, et <strong>frame-src</strong> pour autoriser <strong>https://www.google.com/recaptcha/</strong> et <strong>https://recaptcha.google.com/recaptcha/</strong>. L\'utilisation de <strong>strict-dynamic</strong> est également supportée sur les navigateurs compatibles.';
$_['text_v3_score_threshold_register'] = 'Inscription';
$_['text_v3_score_threshold_guest']    = 'Achat en tant qu\'invité';
$_['text_v3_score_threshold_review']   = 'Avis';
$_['text_v3_score_threshold_return']   = 'Retours';
$_['text_v3_score_threshold_contact']  = 'Contact';
$_['text_log_clear_success']     = 'Le journal des erreurs a été vidé avec succès.';

// Tab
$_['tab_general']                      = 'Général';
$_['tab_security']                     = 'Sécurité';
$_['tab_error_log']                    = 'Journal des erreurs';
$_['tab_help_and_support']             = 'Aide &amp; Support';

// Entry
$_['entry_key_type']                   = 'Type de reCAPTCHA';
$_['entry_site_key']                   = 'Clé du site';
$_['entry_secret_key']                 = 'Clé secrète';
$_['entry_status']                     = 'Statut';
$_['entry_badge_position']             = 'Position du badge';
$_['entry_badge_theme']                = 'Thème du badge';
$_['entry_badge_size']                 = 'Taille du badge';
$_['entry_hide_badge']                 = 'Masquer le badge';
$_['entry_script_nonce']               = 'Nonce du script';
$_['entry_google_captcha_nonce']       = 'Nonce du script Google Captcha API';
$_['entry_css_nonce']                  = 'Nonce de la balise de style CSS';
$_['entry_log_filename']               = 'Nom du fichier de journal de validation';
$_['entry_send_client_ip']               = 'Envoyer l\'adresse IP du client';
$_['entry_enable_error_log']           = 'Activer le journal des erreurs';

// Button
$_['button_download']                  = 'Télécharger';
$_['button_clear']                     = 'Effacer';

// Help
$_['help_copy']                        = 'Copier l\'URL';
$_['help_key_type']                    = 'Choisissez le type de reCAPTCHA pour cette clé de site. Une clé de site ne fonctionne qu’avec un seul type de site reCAPTCHA. Consultez <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Types de sites</a> pour plus de détails.';
$_['help_hide_badge']                  = 'En activant cette option, vous pouvez complètement masquer le badge Google reCAPTCHA. Un avis sera automatiquement ajouté au pied de page de chaque page pour se conformer aux directives de Google. Pour plus d\'informations, consultez la section <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Je voudrais masquer le badge reCAPTCHA. Qu\'est-ce qui est autorisé ?</a> sur la page FAQ de Google reCAPTCHA.';
$_['help_site_key']                    = 'Utilisez cette clé de site dans le code HTML que votre site sert aux utilisateurs.';
$_['help_secret_key']                  = 'Utilisez cette clé secrète pour la communication entre votre site et reCAPTCHA.';
$_['help_v3_score_threshold']          = 'Ce paramètre définit le seuil pour le score renvoyé par reCAPTCHA v3. Le score varie de 0,0 à 1,0, un score plus élevé (proche de 1,0) indiquant une plus grande probabilité d\'une interaction légitime de l\'utilisateur, et un score plus bas (proche de 0,0) suggérant une plus grande probabilité d\'un bot. Vous pouvez ajuster ce seuil pour déterminer les actions à entreprendre en fonction du score. Par défaut, un seuil de 0,5 est utilisé, mais vous pouvez le modifier en fonction des besoins spécifiques de votre site.';
$_['help_log_filename']                = 'Entrez le nom du fichier de journal pour stocker les erreurs de validation de reCAPTCHA.';

// Error
$_['error_permission']                 = 'Avertissement : Vous n\'avez pas la permission de modifier Google reCAPTCHA !';
$_['error_error_log_permission']       = 'Avertissement : Vous n\'avez pas l\'autorisation de vider le journal des erreurs !';
$_['error_error_log_file']             = 'Avertissement : Le fichier %s est introuvable !';
$_['error_error_log_empty']            = 'Avertissement : Le fichier journal %s est vide !';
$_['error_site_key']                   = 'Clé requise !';
$_['error_secret_key']                 = 'Clé secrète requise !';
$_['error_v3_score_threshold_value']   = 'La valeur du score doit être comprise entre 0 et 1. Elle ne peut pas être inférieure à 0 ni supérieure à 1.';
$_['error_log_filename']               = 'Un nom de fichier de journal est requis pour stocker les erreurs de validation de reCAPTCHA.';
