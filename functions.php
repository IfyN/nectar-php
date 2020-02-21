/***Change the texts on checkout page*****/
function wc_billing_field_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case 'Billing details' :
            $translated_text = __( 'Customer Details', 'woocommerce' );
            break;
    }
    return $translated_text;
}
add_filter( 'gettext', 'wc_billing_field_strings', 20, 3 );

/*****Change ship to different address****/
function shipchange( $translated_text, $text, $domain ) {
switch ( $translated_text ) {
case 'Ship to a different address?' :
$translated_text = __( 'Recipient Details', 'woocommerce' );
break;
}
return $translated_text;
}

add_filter('gettext', 'shipchange', 20, 3);

