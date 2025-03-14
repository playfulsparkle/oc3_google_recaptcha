<?php
// Heading
$_['heading_title']                    = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_fix']                      = 'Επιδιόρθωση κοινών σφαλμάτων';
$_['heading_getting_started']          = 'Ξεκινώντας';
$_['heading_setup']                    = 'Ρύθμιση του Google reCAPTCHA';
$_['heading_troubleshot']              = 'Συνηθισμένη Αντιμετώπιση Προβλημάτων';
$_['heading_faq']                      = 'Συχνές Ερωτήσεις';
$_['heading_contact']                  = 'Επικοινωνία με την Υποστήριξη';
$_['heading_v3_score_threshold']       = 'Όριο Βαθμολογίας';

// Text
$_['text_extension']                   = 'Επεκτάσεις';
$_['text_success']                     = 'Επιτυχία: Τροποποιήσατε το Google reCAPTCHA!';
$_['text_edit']                        = 'Επεξεργασία Google reCAPTCHA';
$_['text_signup']                      = 'Για να ξεκινήσετε, επισκεφθείτε τη <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">σελίδα Google reCAPTCHA</a> και καταχωρίστε τον ιστότοπό σας για να λάβετε το Κλειδί Ιστότοπου reCAPTCHA και το Μυστικό Κλειδί.';
$_['text_getting_started']             = '<p><strong>Επισκόπηση:</strong> Το Playful Sparkle - Google reCAPTCHA είναι μια προηγμένη επέκταση για το OpenCart 4, σχεδιασμένη για να προστατεύει το κατάστημά σας από ανεπιθύμητη αλληλογραφία και κατάχρηση. Υποστηρίζει πολλαπλές υλοποιήσεις του Google reCAPTCHA, συμπεριλαμβανομένων των Score-based (v3), Checkbox (v2) και Invisible (v2), παρέχοντας ευελιξία και ενισχυμένη ασφάλεια για το κατάστημά σας.</p><p><strong>Απαιτήσεις:</strong> OpenCart 3.x+, PHP 7.3 ή νεότερη</p>';
$_['text_setup']                       = '<ul><li><strong>Βήμα 1:</strong> Λάβετε το Κλειδί Ιστότοπου reCAPTCHA και το Μυστικό Κλειδί από την <a href="https://www.google.com/recaptcha/admin/create" target="_blank" rel="noopener noreferrer">κονσόλα διαχείρισης Google reCAPTCHA</a>.</li><li><strong>Βήμα 2:</strong> Στον πίνακα διαχείρισης του OpenCart, μεταβείτε στις ρυθμίσεις της επέκτασης και επιλέξτε την υλοποίηση reCAPTCHA που θέλετε να χρησιμοποιήσετε (Score-based v3, Checkbox v2 ή Invisible v2).</li><li><strong>Βήμα 3:</strong> Προσαρμόστε τις ρυθμίσεις σας βάσει της επιλεγμένης υλοποίησης:<ul><li>Για Score based (v3): Ορίστε τη θέση του σήματος (κάτω αριστερά, κάτω δεξιά ή ενσωματωμένο). Για ενσωματωμένο, επιλέξτε ανοιχτό ή σκούρο θέμα ή αποκρύψτε το σήμα (με μια ειδοποίηση υποσέλιδου για συμμόρφωση με την πολιτική της Google).</li><li>Για Challenge (v2) Checkbox challenge: Ορίστε το θέμα του σήματος (ανοιχτό ή σκούρο) και το μέγεθος (κανονικό ή συμπαγές).</li><li>Για Challenge (v2) Invisible: Ορίστε τη θέση του σήματος (κάτω αριστερά, κάτω δεξιά ή ενσωματωμένο). Για ενσωματωμένο, επιλέξτε ανοιχτό ή σκούρο θέμα.</li></ul></li><li><strong>Βήμα 4:</strong> Διαμορφώστε το reCAPTCHA για τις επιθυμητές σελίδες στη σελίδα ρυθμίσεων του OpenCart.</li></ul>';
$_['text_troubleshot']                 = '<ul><li><strong>Πρόβλημα:</strong> Το reCAPTCHA δεν εμφανίζεται. <strong>Λύση:</strong> Βεβαιωθείτε ότι έχουν εισαχθεί σωστά το Κλειδί Ιστότοπου και το Μυστικό Κλειδί και επιβεβαιώστε ότι ο τομέας σας είναι καταχωρισμένος στην κονσόλα διαχείρισης Google reCAPTCHA.</li><li><strong>Πρόβλημα:</strong> Εμφανίζεται σφάλμα κατά την επικύρωση. <strong>Λύση:</strong> Ελέγξτε ότι το ζεύγος κλειδιών αντιστοιχεί στην υλοποίηση reCAPTCHA (π.χ., τα κλειδιά v2 Checkbox δεν μπορούν να χρησιμοποιηθούν για v3).</li><li><strong>Πρόβλημα:</strong> Η προσαρμογή του σήματος δεν εμφανίζεται όπως αναμενόταν. <strong>Λύση:</strong> Ελέγξτε ξανά τις ρυθμίσεις διαμόρφωσης του σήματος (π.χ., θέση, θέμα ή μέγεθος).</li></ul>';
$_['text_faq']                         = '<details><summary>Ποια υλοποίηση reCAPTCHA πρέπει να επιλέξω;</summary> Εξαρτάται από τις ανάγκες σας:<ul><li><strong>Score-based (v3):</strong> Η καλύτερη για απρόσκοπτη εμπειρία χρήστη χωρίς άμεση αλληλεπίδραση, χρήσιμη για επικύρωση στο παρασκήνιο.</li><li><strong>Checkbox (v2):</strong> Προσθέτει ένα σαφές πλαίσιο ελέγχου "Δεν είμαι ρομπότ" για ορατή αλληλεπίδραση, ιδανικό για φόρμες που βλέπουν οι χρήστες.</li><li><strong>Invisible (v2):</strong> Επικυρώνει αιτήματα στο παρασκήνιο χωρίς να απαιτείται αλληλεπίδραση από τον χρήστη, ιδανικό για πιο καθαρές διεπαφές με προαιρετική εμφάνιση σήματος.</li></ul></details><details><summary>Γιατί λαμβάνω ένα σφάλμα "Μη έγκυρο κλειδί ιστοτόπου";</summary> Αυτό συμβαίνει όταν τα κλειδιά που εισαγάγατε δεν ταιριάζουν με την υλοποίηση reCAPTCHA που επιλέξατε. Βεβαιωθείτε ότι χρησιμοποιείτε το σωστό ζεύγος κλειδιών για την επιλεγμένη υλοποίηση (π.χ., κλειδιά v3 για v3, κλειδιά v2 Checkbox για v2 Checkbox, κ.λπ.).</details><details><summary>Πού μπορώ να ενεργοποιήσω το reCAPTCHA;</summary> Το reCAPTCHA μπορεί να ρυθμιστεί για διάφορες σελίδες στη σελίδα ρυθμίσεων του OpenCart.</details>';
$_['text_contact']                     = '<p>Για περαιτέρω βοήθεια, επικοινωνήστε με την ομάδα υποστήριξής μας:</p><ul><li><strong>Επικοινωνία:</strong> <a href="mailto:%s">%s</a></li><li><strong>Τεκμηρίωση:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Εγχειρίδιο Χρήστη</a></li></ul>';
$_['text_key_type_v3']                 = 'Βασισμένο σε βαθμολογία (v3) - Επαλήθευση αιτημάτων με βαθμολογία';
$_['text_key_type_v2_checkbox']        = 'Πρόκληση (v2) - Πρόκληση πλαισίου ελέγχου "Δεν είμαι ρομπότ"';
$_['text_key_type_v2_invisible']       = 'Πρόκληση (v2) - Αόρατη πρόκληση σήματος reCAPTCHA';
$_['text_badge_inline']                = 'Ενσωματωμένο';
$_['text_badge_bottom_left']           = 'Κάτω Αριστερά';
$_['text_badge_bottom_right']          = 'Κάτω Δεξιά';
$_['text_badge_dark']                  = 'Σκούρο';
$_['text_badge_light']                 = 'Ανοιχτό';
$_['text_badge_compact']               = 'Συμπαγές';
$_['text_badge_normal']                = 'Κανονικό';
$_['text_badge_invisible']             = 'Αόρατο';
$_['text_csp_info']                    = 'Βεβαιωθείτε ότι η Πολιτική Ασφάλειας Περιεχομένου (CSP) έχει ρυθμιστεί σωστά για να λειτουργεί με το Google reCAPTCHA. Συνιστούμε να χρησιμοποιήσετε την <strong>προσέγγιση βάσει nonce από το CSP3</strong> για μέγιστη ασφάλεια. Εναλλακτικά, συμπεριλάβετε το <strong>script-src</strong> για να επιτρέψετε τα <strong>https://www.google.com/recaptcha/</strong> και <strong>https://www.gstatic.com/recaptcha/</strong>, και το <strong>frame-src</strong> για να επιτρέψετε τα <strong>https://www.google.com/recaptcha/</strong> και <strong>https://recaptcha.google.com/recaptcha/</strong>. Η χρήση του <strong>strict-dynamic</strong> υποστηρίζεται επίσης σε συμβατούς browsers.';
$_['text_admin_login']                 = 'Σύνδεση Διαχειριστή';
$_['text_catalog_login']               = 'Σύνδεση Καταλόγου';
$_['text_register']                    = 'Εγγραφή';
$_['text_forgotten_password']          = 'Ξεχάσατε τον Κωδικό Πρόσβασης';
$_['text_guest']                       = 'Ολοκλήρωση Αγοράς ως Επισκέπτης';
$_['text_review']                      = 'Κριτικές';
$_['text_comment']                     = 'Σχόλιο';
$_['text_return']                      = 'Επιστροφές';
$_['text_contact']                     = 'Επικοινωνία';
$_['text_default']                     = '(προεπιλογή)';
$_['text_log_clear_success']           = 'Το αρχείο καταγραφής σφαλμάτων εκκαθαρίστηκε επιτυχώς.';

// Tab
$_['tab_general']                      = 'Γενικά';
$_['tab_security']                     = 'Ασφάλεια';
$_['tab_help_and_support']             = 'Βοήθεια &amp; Υποστήριξη';

// Entry
$_['entry_key_type']                   = 'Τύπος reCAPTCHA';
$_['entry_site_key']                   = 'Κλειδί ιστοτόπου';
$_['entry_secret_key']                 = 'Μυστικό κλειδί';
$_['entry_status']                     = 'Κατάσταση';
$_['entry_badge_position']             = 'Θέση Σήματος';
$_['entry_badge_theme']                = 'Θέμα Σήματος';
$_['entry_badge_size']                 = 'Μέγεθος Σήματος';
$_['entry_hide_badge']                 = 'Απόκρυψη Σήματος';
$_['entry_script_nonce']               = 'Nonce Σκripτ';
$_['entry_google_captcha_nonce']       = 'Nonce Σκripτ API Google Captcha';
$_['entry_css_nonce']                  = 'Nonce Ετικέτας Στυλ CSS';
$_['entry_log_filename']               = 'Όνομα αρχείου καταγραφής επικύρωσης';
$_['entry_send_client_ip']             = 'Αποστολή Διεύθυνσης IP Πελάτη';
$_['entry_enable_error_log']           = 'Ενεργοποίηση Αρχείου Καταγραφής Σφαλμάτων';

// Button
$_['button_download']                  = 'Λήψη';
$_['button_clear']                     = 'Εκκαθάριση';
$_['tab_error_log']                    = 'Αρχείο Καταγραφής Σφαλμάτων';
$_['button_fix_event_handler']         = 'Επιδιόρθωση Χειριστή Συμβάντων';

// Help
$_['help_copy']                        = 'Αντιγραφή URL';
$_['help_key_type']                    = 'Επιλέξτε τον τύπο του reCAPTCHA για αυτό το κλειδί ιστοτόπου. Ένα κλειδί ιστοτόπου λειτουργεί μόνο με έναν τύπο ιστοτόπου reCAPTCHA. Δείτε <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Τύποι Ιστοτόπων</a> για περισσότερες λεπτομέρειες.';
$_['help_hide_badge']                  = 'Ενεργοποιώντας αυτήν την επιλογή, μπορείτε να αποκρύψετε εντελώς το σήμα Google reCAPTCHA. Μια ειδοποίηση θα προστεθεί αυτόματα στο υποσέλιδο κάθε σελίδας για συμμόρφωση με τις οδηγίες της Google. Για περισσότερες πληροφορίες, ανατρέξτε στην ενότητα <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Θα ήθελα να αποκρύψω το σήμα reCAPTCHA. Τι επιτρέπεται;</a> στη σελίδα Συχνών Ερωτήσεων του Google reCAPTCHA.';
$_['help_site_key']                    = 'Χρησιμοποιήστε αυτό το κλειδί ιστοτόπου στον κώδικα HTML που ο ιστότοπός σας παρέχει στους χρήστες.';
$_['help_secret_key']                  = 'Χρησιμοποιήστε αυτό το μυστικό κλειδί για την επικοινωνία μεταξύ του ιστοτόπου σας και του reCAPTCHA.';
$_['help_v3_score_threshold']          = 'Αυτή η ρύθμιση ορίζει το όριο για τη βαθμολογία που επιστρέφεται από το reCAPTCHA v3. Η βαθμολογία κυμαίνεται από 0.0 έως 1.0, όπου μια υψηλότερη βαθμολογία (πιο κοντά στο 1.0) υποδηλώνει μεγαλύτερη πιθανότητα νόμιμης αλληλεπίδρασης χρήστη και μια χαμηλότερη βαθμολογία (πιο κοντά στο 0.0) υποδηλώνει μεγαλύτερη πιθανότητα bot. Μπορείτε να προσαρμόσετε αυτό το όριο για να καθορίσετε τις ενέργειες που θα κάνετε με βάση τη βαθμολογία. Από προεπιλογή, χρησιμοποιείται ένα όριο 0.5, αλλά μπορείτε να το τροποποιήσετε σύμφωνα με τις συγκεκριμένες απαιτήσεις του ιστοτόπου σας.';
$_['help_log_filename']                = 'Εισαγάγετε το όνομα του αρχείου καταγραφής για την αποθήκευση σφαλμάτων επικύρωσης reCAPTCHA.';

// Error
$_['error_permission']                 = 'Προειδοποίηση: Δεν έχετε άδεια να τροποποιήσετε το Google reCAPTCHA!';
$_['error_error_log_permission']       = 'Προειδοποίηση: Δεν έχετε άδεια να εκκαθαρίσετε το αρχείο καταγραφής σφαλμάτων!';
$_['error_error_log_file']             = 'Προειδοποίηση: Δεν βρέθηκε το αρχείο %s!';
$_['error_error_log_empty']            = 'Προειδοποίηση: Το αρχείο καταγραφής %s είναι άδειο!';
$_['error_site_key']                   = 'Απαιτείται κλειδί!';
$_['error_secret_key']                 = 'Απαιτείται μυστικό!';
$_['error_v3_score_threshold_value']   = 'Η τιμή βαθμολογίας πρέπει να είναι μεταξύ 0 και 1. Δεν μπορεί να είναι μικρότερη από 0 ή μεγαλύτερη από 1.';
$_['error_log_filename']               = 'Απαιτείται όνομα αρχείου καταγραφής για την αποθήκευση σφαλμάτων επικύρωσης reCAPTCHA.';
