<?php
/**
 * Inline SVG icon set. Icons are sized via font-size (1em width/height) and
 * colored via the `color` property (stroke uses currentColor), so a single
 * shared markup adapts to whatever badge/context it's placed in.
 */

function icon(string $name): string
{
    $icons = [
        'shield' => '<path d="M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3z"/>',
        'brain' => '<path d="M9 18h6M10 22h4M12 2a6 6 0 00-4 10.4c.6.6 1 1.4 1 2.3V16h6v-1.3c0-.9.4-1.7 1-2.3A6 6 0 0012 2z"/>',
        'trending-up' => '<polyline points="3 17 9 11 13 15 21 6"/><polyline points="14 6 21 6 21 13"/>',
        'devices' => '<rect x="2" y="4" width="14" height="10" rx="1"/><rect x="17" y="9" width="5" height="8" rx="1"/><line x1="6" y1="18" x2="12" y2="18"/>',
        'gauge' => '<path d="M4 13a8 8 0 1116 0"/><line x1="12" y1="13" x2="16" y2="9"/><line x1="12" y1="13" x2="12" y2="13.01"/>',
        'tag' => '<path d="M20.59 13.41L12 22 2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><circle cx="7" cy="7" r="1.4"/>',
        'users' => '<circle cx="8" cy="8" r="3"/><path d="M2 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="8" r="2.2"/><path d="M15 14.2c2.4.6 4 2.6 4 5.8"/>',
        'bar-chart' => '<rect x="4" y="12" width="3" height="8"/><rect x="10.5" y="6" width="3" height="14"/><rect x="17" y="9" width="3" height="11"/>',
        'building' => '<rect x="4" y="3" width="16" height="18" rx="1"/><line x1="8" y1="7" x2="10" y2="7"/><line x1="14" y1="7" x2="16" y2="7"/><line x1="8" y1="11" x2="10" y2="11"/><line x1="14" y1="11" x2="16" y2="11"/><line x1="8" y1="15" x2="10" y2="15"/><line x1="14" y1="15" x2="16" y2="15"/><line x1="10" y1="21" x2="10" y2="17"/><line x1="14" y1="21" x2="14" y2="17"/>',
        'link' => '<path d="M8 10.5L6.5 12A3.5 3.5 0 1011.5 17L13 15.5"/><path d="M16 13.5L17.5 12A3.5 3.5 0 1012.5 7L11 8.5"/><path d="M9 15l6-6"/>',
        'landmark' => '<line x1="4" y1="21" x2="20" y2="21"/><line x1="5" y1="10" x2="5" y2="21"/><line x1="9" y1="10" x2="9" y2="21"/><line x1="15" y1="10" x2="15" y2="21"/><line x1="19" y1="10" x2="19" y2="21"/><polygon points="12 3 21 9 3 9"/>',
        'graduation-cap' => '<path d="M2 9l10-5 10 5-10 5-10-5z"/><path d="M6 11v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"/><line x1="22" y1="9" x2="22" y2="15"/>',
        'bed' => '<path d="M2 18v-6a2 2 0 012-2h16a2 2 0 012 2v6"/><path d="M2 18v3"/><path d="M22 18v3"/><path d="M2 12V7a2 2 0 012-2h6v5"/><circle cx="6.5" cy="8" r="1.2"/>',
        'briefcase' => '<rect x="2" y="7" width="20" height="13" rx="2"/><path d="M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2"/><line x1="2" y1="13" x2="22" y2="13"/>',
        'home-modern' => '<path d="M3 11l9-7 9 7"/><path d="M5 10v10h14V10"/><rect x="9" y="14" width="6" height="6"/>',
        'hard-hat' => '<path d="M4 15a8 8 0 0116 0z"/><line x1="2" y1="15" x2="22" y2="15"/><line x1="12" y1="4" x2="12" y2="7"/>',
        'droplet' => '<path d="M12 2s7 8.5 7 13a7 7 0 11-14 0c0-4.5 7-13 7-13z"/>',
        'cpu' => '<rect x="6" y="6" width="12" height="12" rx="1"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="15" x2="4" y2="15"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="15" x2="23" y2="15"/>',
        'badge-check' => '<path d="M12 2l2.4 2.1 3.1-.4.9 3 2.8 1.4-.9 3 .9 3-2.8 1.4-.9 3-3.1-.4L12 22l-2.4-2.1-3.1.4-.9-3-2.8-1.4.9-3-.9-3 2.8-1.4.9-3 3.1.4z"/><polyline points="9 12 11 14 15 10"/>',
        'puzzle' => '<path d="M9 3h4a1 1 0 011 1v2.3a1.7 1.7 0 002.6 1.4A1.7 1.7 0 0119 9.4V13a1 1 0 01-1 1h-2.3a1.7 1.7 0 00-1.4 2.6 1.7 1.7 0 01-1.6 2.4H9a1 1 0 01-1-1v-2.3a1.7 1.7 0 00-2.6-1.4A1.7 1.7 0 013 12.6V9a1 1 0 011-1h2.3A1.7 1.7 0 007.7 6a1.7 1.7 0 011.3-3z"/>',
        'handshake' => '<path d="M2 12l4-4 4 3 3-3 4 4"/><path d="M9 11l-3 3 2 2 3-3"/><path d="M15 11l3 3-2 2-3-3"/>',
        'heart' => '<path d="M12 21s-7-4.4-9.5-9C1 8.5 2.5 5 6 5c2 0 3.5 1.2 4 2.4C10.5 6.2 12 5 14 5c3.5 0 5 3.5 3.5 7-2.5 4.6-9.5 9-9.5 9z"/>',
        'leaf' => '<path d="M20 4C10 4 3 11 3 20c9 0 16-7 16-16z"/><path d="M20 4c-4 4-8 8-13 13"/>',
        'phone' => '<path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6A19.8 19.8 0 012.1 4.2 2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.7a2 2 0 01-.5 2.1L8 9.6a16 16 0 006 6l1.1-1.1a2 2 0 012.1-.5c.9.3 1.8.5 2.7.6a2 2 0 011.7 2.1z"/>',
        'mail' => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 6l10 7 10-7"/>',
        'message' => '<path d="M21 11.5a8.4 8.4 0 01-8.9 8.4 8.5 8.5 0 01-4-1L3 20l1.1-5A8.4 8.4 0 1121 11.5z"/>',
        'clock' => '<circle cx="12" cy="12" r="9"/><polyline points="12 7 12 12 15.5 14"/>',
        'map-pin' => '<path d="M12 21s7-6.4 7-12a7 7 0 10-14 0c0 5.6 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/>',
        'check' => '<polyline points="20 6 9 17 4 12"/>',
        'flame' => '<path d="M12 2c1 3-3 4-3 8a3 3 0 006 0c0-1-1-2-1-2 1.5 1 3 3 3 5.5A5.5 5.5 0 016.5 19 5.5 5.5 0 011 13.5C1 9 4 6 6 4c0 2 1 3 2 3-.5-2 0-3.5 4-5z" fill="currentColor" stroke="none"/>',
        'bolt' => '<polygon points="13 2 4 14 11 14 10 22 20 9 13 9 13 2" fill="currentColor" stroke="none"/>',
        'signal' => '<path d="M2 20h2v-4H2v4zm5 0h2v-8H7v8zm5 0h2v-12h-2v12zm5 0h2V4h-2v16z" fill="currentColor" stroke="none"/>',
        'chevron-up' => '<polyline points="18 15 12 9 6 15"/>',
        'chevron-down' => '<polyline points="6 9 12 15 18 9"/>',
        'chevron-left' => '<polyline points="15 18 9 12 15 6"/>',
        'chevron-right' => '<polyline points="9 18 15 12 9 6"/>',
        'facebook' => '<path fill="currentColor" stroke="none" d="M13.5 21v-7.5H16l.4-3H13.5V8.5c0-.9.2-1.5 1.5-1.5h1.6V4.2C16.3 4.1 15.3 4 14.2 4c-2.4 0-4 1.5-4 4.2V10.5H7.8v3h2.4V21h3.3z"/>',
        'x-twitter' => '<path stroke-linecap="round" d="M4.5 4.5l15 15M19.5 4.5l-15 15"/>',
        'linkedin' => '<rect x="4" y="9" width="3" height="11" fill="currentColor" stroke="none"/><circle cx="5.5" cy="5" r="1.8" fill="currentColor" stroke="none"/><path fill="currentColor" stroke="none" d="M11 9h3v2c.7-1.4 2-2.3 3.8-2.3 3 0 4.2 2 4.2 5V20h-3v-5.6c0-1.5-.5-2.5-1.9-2.5-1.3 0-2 1-2.3 1.9-.1.3-.1.6-.1 1V20h-3V9z"/>',
        'youtube' => '<rect x="2.5" y="6" width="19" height="12" rx="4"/><path fill="currentColor" stroke="none" d="M10 9.5l5.5 3-5.5 3v-6z"/>',
    ];

    $inner = $icons[$name] ?? '';
    return '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" '
        . 'stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $inner . '</svg>';
}
