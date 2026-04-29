# Conference Page Redesign — Design Spec

**Date:** 2026-04-30
**Page:** `resources/js/Pages/Conference.vue`
**Reference:** https://pharmacybusinessconference.co.uk/
**Direction:** Inspired-by, not literal copy. Adopt the editorial UK trade-conference tone (white-dominant, restrained, photo-forward where possible) while keeping the Pharmacist Evolve orange identity and adapting to a not-yet-confirmed speaker line-up.

---

## 1. Visual Language

### Palette
- **Primary surface:** white (`bg-white`) and cream (`bg-orange-50/40` or `bg-stone-50`) for alternating sections.
- **Ink:** `text-gray-900` for headings, `text-gray-600` for body, `text-gray-500` for meta.
- **Brand accent:** orange (Tailwind `orange-500` / `amber-500`), used for:
  - Primary button gradient
  - Eyebrow labels (small caps)
  - Date pill
  - Bullet/check icons
  - Hover underline on links
- **Support color:** a single neutral slate (`slate-700`/`slate-200`) for secondary surfaces. **Eliminate** the current rainbow-card system (orange/blue/emerald/purple stakeholder cards, blue/emerald/purple "what makes it different" cards, etc.). All cards now share one accent color: orange.

### Typography
- Display headlines step up: H1 hero `text-7xl lg:text-8xl`, section H2s `text-4xl lg:text-5xl`. Tighter tracking (`tracking-tight`).
- Eyebrow labels remain small caps + wide tracking but flatten to `text-orange-600` (no gradient).
- Body copy: keep current scale; improve leading slightly.

### Motion (heavy reduction)
- **Remove:** animated radial blobs, pulsing date dot, grid overlay, bouncing scroll arrow, `hover:scale-105` on buttons, group-hover icon scale on cards.
- **Keep:** subtle hover lift on cards (translateY(-2px) + shadow), color-shift on button hover, link underline-reveal.

---

## 2. Section Map (8 sections, was 10)

| # | Section | Bg | Status |
|---|---------|----|----|
| 1 | Hero | white | Restructured (two-column, light) |
| 2 | Why this conference exists **+** What makes it different | white | **Merged** |
| 3 | Who this conference is for | cream | Restyled |
| 4 | The Journey of the Day (programme CTA) | white | Lightly restyled |
| 5 | Workforce Integration Pathway | cream | **Lightened from dark** |
| 6 | Speakers & Contributors | white | **Silhouette grid** (was category cards) |
| 7 | Partners & Sponsors | cream | Restyled |
| 8 | Closing block (Practical Info + About + Final CTA) | white | **Condensed** from 3 separate sections |

The current dark "Final CTA" hero finale section is removed; its content folds into the closing block above.

---

## 3. Per-Section Detail

### Section 1 — Hero

**Layout:** two-column on `lg`+, single-column on mobile.

**Left column (~58% on desktop):**
- Date pill: `inline-flex` rounded-full, `bg-orange-50 border border-orange-200 text-orange-700`, dot left + "23 May 2026 · Warwick, UK". No animation.
- Display headline: stacked
  - "Catalyst" — orange→amber gradient text only on this word
  - "Conference" — `text-gray-900`
  - "2026" — smaller, `text-gray-500`
- Tagline (current copy): "Shaping the Future of Overseas Pharmacist Workforce Integration"
- Decorative tri-word: `── Empower · Evolve · Excel ──` in `text-orange-600`
- Description paragraph (current copy)
- "Delegates will leave with:" bullet list — 4 items, orange check icons on white background
- CTA row:
  - Primary: orange→amber gradient "Get a Delegate Pass →" (Eventbrite link)
  - Secondary: outlined "View Delegates" (Inertia `<Link>` to `/delegates`)
  - Tertiary: text-link "Partner With Us" (mailto)

**Right column (~42% on `lg`+; on `md` it stacks below the left column at full width; hidden below `md` — its content reappears as a horizontal info strip in the mobile fallback):**
- Editorial save-the-date panel:
  - Background: `bg-gradient-to-br from-orange-50 via-white to-amber-50`, soft shadow, rounded-2xl.
  - Big monospace date `23.05.26` — `font-mono text-6xl text-gray-900`
  - Thin horizontal rule
  - `WARWICK, UK` small caps
  - Three info rows below the rule, each with a thin line icon:
    - 10:00 AM – 4:30 PM
    - 100–120 delegates
    - Panels & workshops
- No photo. No animated effects.

**Mobile:** stacks. The right-side panel becomes a horizontal info strip below the CTAs.

### Section 2 — Why this conference exists (merged with What Makes It Different)

**Top:** editorial prose block (current copy from "Why the Catalyst Conference Exists"), max-width 4xl, centered. The orange highlight call-out (`The Pharmacist Evolve Catalyst Conference exists to change that.`) stays but with a flatter treatment — single orange left border, light cream fill.

**Bottom:** the four "What makes it different" pillars become a 4-column row beneath the prose:
- Lived Experience at the Centre
- Practical, Not Performative
- Cross-Sector Collaboration
- Solutions-Focused

Each pillar is a light card: small orange icon in a cream-tinted square, bold heading, one-line description. **No dark gradient cards.** All four use the same orange accent (was 4 different colors).

Background: white throughout the merged section.

### Section 3 — Who this conference is for

3 cards on `lg`, stacked on mobile. Section background: cream.

Each card:
- White surface, thin gray border, rounded-2xl
- Top edge accent bar (orange only, no rainbow)
- Small orange icon block top-left
- Heading + 3 bullet points with orange check icons
- On hover: subtle lift + accent bar slides in

The closing "If you care about building a safe, confident, and well-supported pharmacy workforce, this conference is for you." line stays.

Mid-page CTA row stays (3 buttons). Same primary/secondary/tertiary pattern.

### Section 4 — The Journey of the Day (programme CTA)

Background: white. Eyebrow "Agenda" → headline "The Journey of the Day" → description (current copy) → 2 buttons (View Full Programme, Get a Delegate Pass).

Compact, breathing room, no extra ornament.

### Section 5 — Workforce Integration Pathway

**Lightened from dark.** Background: cream.

- Eyebrow "Centrepiece"
- Headline "From Insight to Action"
- Sub-headline "The Workforce Integration Pathway"
- Description paragraph (current copy)
- Three numbered steps in a row:
  - Step circle: white surface, 2px orange ring, bold orange numeral inside
  - Heading: Pre-OSPAP / OSPAP & Training / Post-Registration
  - Description: one line each
- Connecting line: thin gray with orange dots at junctions (decorative, hidden < md)
- Pull-quote box: cream-tinted with orange left rule, current copy ("This is not presented as a finished solution…")
- Closing one-liner: "The Catalyst Conference marks the beginning of wider collaboration, not the end of the conversation."

### Section 6 — Speakers & Contributors

**Silhouette grid replaces the 4 stakeholder-category cards.**

- Eyebrow "Voices" → headline "Speakers & Contributors" → one-line description.
- Grid: **8 placeholder cards**, 2 cols on mobile, 4 cols on `lg`.
- Each card:
  - Square or 4:5 aspect, light gray/cream background, rounded-2xl, thin border
  - Top: a soft circular avatar placeholder (gray gradient), with an abstract figure silhouette icon centered. Use the same silhouette icon on all 8 cards for visual consistency.
  - Body: "Speaker to be announced" in `text-gray-500`
  - Footer: small caps role label (`text-orange-600`):
    - 2× Overseas-trained pharmacist
    - 2× Pharmacy leader / employer
    - 2× Educator or training provider
    - 2× Workforce / policy stakeholder
- Below the grid: amber-tinted info pill "Full speaker announcements coming soon." (unchanged copy) + the "Interested in contributing?" mailto line.

### Section 7 — Partners & Sponsors

Background: cream.

- Eyebrow "Collaborate" → headline "Partners & Sponsors" → description (current copy)
- 3 tier cards in one row (Sponsor / Event Partner / Media Partner):
  - Tier label in small caps `text-gray-500` above each card
  - White card, thin border, generous padding, logo centered, fixed height
  - Logos use existing assets: `revive-active.webp`, `one-origin.png`, `pharmacy-business.jpg`
- Below: single primary button "Discuss Partnership Opportunities" (mailto), centered.

### Section 8 — Closing block (Practical Info + About + Final CTA)

**Condensed from current 3 sections (Practical Information / About Pharmacist Evolve / Final CTA).** Single white background, single section, three sub-blocks separated by spacing only.

**Sub-block A: Practical Information**
- Eyebrow "Details" → headline "Practical Information"
- 4 light info cards in a row (2 cols mobile, 4 cols desktop): Venue, Accessibility, Catering, Tickets. Same content, restyled to a uniform light treatment (no per-card pastel gradients).
- "For enquiries, please contact: [email]" line below.

**Sub-block B: About Pharmacist Evolve**
- Centered, max-width prose. Heading "About Pharmacist Evolve" + current paragraph + "Learn more about Pharmacist Evolve →" link.

**Sub-block C: Final CTA**
- Centered. Headline "Be Part of the Conversation" + current 2-paragraph copy + 3 CTA buttons (Get a Delegate Pass / View Delegates / Partner With Us).
- **No second dark hero.** This sits on the same white surface, separated by spacing.

---

## 4. What's Removed Outright

- Animated pulsing radial gradient blobs in hero & final CTA
- Grid overlay pattern in hero
- Bouncing scroll-down arrow
- Two of the dark gradient backgrounds (Workforce Integration Pathway, Final CTA) — both lighten
- Rainbow card color system (orange/blue/emerald/purple): collapses to single orange accent
- `hover:scale-105` on buttons
- Group-hover scale on icon containers
- The standalone "Final CTA" section as a separate visual unit
- The standalone "About Pharmacist Evolve" section as a separate visual unit (folds into closing block)

## 5. What's Preserved

- All textual copy (every paragraph, every bullet, every CTA) — wording is good as-is.
- All existing CTA links (Eventbrite URL, mailto address, `/delegates` and `/programme` routes, `/about` link).
- Sponsor logo assets in `/public/images/sponsors/`.
- The site-wide `AppLayout` (header navigation, footer) — unchanged.
- Inertia `<Link>` usage and `<script setup>` import block.

## 6. Out of Scope

- Site-wide navigation styling (lives in `AppLayout` / `Navigation.vue`)
- Other pages (Home, Programme, Delegates, etc.)
- Adding real speaker data or photos
- Adding a new hero banner image
- Backend changes
- New routes or controllers

## 7. Acceptance Criteria

- Page renders correctly at mobile (≤ 640px), tablet (≤ 1024px), and desktop (≥ 1280px) widths.
- All existing copy is present.
- All existing CTA links resolve to the same URLs.
- No JavaScript console errors.
- No animated radial blobs, no pulse animations, no grid overlay.
- Hero is light (not dark gradient).
- Workforce Integration Pathway is light (not dark gradient).
- Final CTA does not appear as a separate dark hero section.
- Speakers section shows 8 silhouette/placeholder cards in a grid.
- All cards share the orange accent color (no blue/emerald/purple per-card colors).
- No regressions in `/programme`, `/delegates`, or other pages.

## 8. Implementation Notes

- Single file: `resources/js/Pages/Conference.vue`. No new components, no new routes, no new assets.
- Tailwind utility classes only (matches current codebase).
- Run `npm run dev` and visually verify in browser at three breakpoints before declaring done.
- Verify each link still resolves correctly (Eventbrite external, `/delegates`, `/programme`, `/about`, mailto).
