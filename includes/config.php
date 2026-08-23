<?php
/**
 * Site-wide configuration: constants, navigation, contact details.
 * Values sourced from the Reliable Vending website content brief (June 2026).
 */

require_once __DIR__ . '/icons.php';

const SITE_NAME       = 'Reliable Vending Solutions';
const SITE_TAGLINE     = 'Reliable Solutions. Trusted Service. Empowering Convenience.';
const SITE_DOMAIN      = 'www.reliablevending.co.bw';

const CONTACT_PHONE       = '(+267) 393 2519';
const CONTACT_WHATSAPP    = '(+267) 72 818 205';
const CONTACT_EMAIL       = 'info@reliablevending.co.bw';
const CONTACT_SALES_EMAIL = 'babishn@reliablevending.co.bw';
const CONTACT_HOURS       = 'Monday – Friday, 08:00 – 17:00';
const CONTACT_ADDRESS     = 'Plot 176, Gaborone International Commerce Park, Gaborone, Botswana';
const CONTACT_AFTERHOURS  = 'For urgent technical support, call (+267) 72 818 205.';

const COMPANY_LEGAL_NAME = 'Reliable Vending Solutions (Pty) Ltd';
const FOUNDING_YEAR      = 2025;

const PORTAL_URL        = 'https://vending.reliablevending.co.bw';
const PORTAL_LOGIN_URL  = 'https://vending.reliablevending.co.bw';
const PORTAL_TOKENS_URL = 'https://vending.reliablevending.co.bw/tokens';

const MAP_EMBED_URL = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.840029912225!2d25.881113374832637!3d-24.698025278035647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ebb5b007056c321%3A0x86c68ae40bfb2bba!2sLeeroy%20Systems!5e0!3m2!1sen!2sbw!4v1783074484996!5m2!1sen!2sbw';

/** Social profile links shown in the footer. */
const SOCIAL_LINKS = [
    'facebook'  => ['label' => 'Facebook', 'icon' => 'facebook', 'url' => 'https://www.facebook.com/profile.php?id=61591127675608'],
    'linkedin'  => ['label' => 'LinkedIn', 'icon' => 'linkedin', 'url' => 'https://www.linkedin.com/company/reliable-vending-solutions/'],
];

/** Primary site navigation. Key = page slug (matches file name without .php). */
const NAV_LINKS = [
    'index'     => 'Home',
    'about'     => 'About',
    'solutions' => 'Solutions',
    'contact'   => 'Contact',
];

/**
 * Returns the URL-safe slug of the currently executing page, used to
 * highlight the active item in the main navigation.
 */
function current_page_slug(): string
{
    return basename($_SERVER['SCRIPT_NAME'], '.php');
}

/** Builds the href for a nav slug (the "index" slug maps to index.php). */
function nav_href(string $slug): string
{
    return '/' . $slug . '.php';
}
