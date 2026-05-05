# Conference Page — Heritage Editorial Redesign (v3)

**Date:** 2026-05-05
**Page:** `resources/js/Pages/Conference.vue`
**Source:** Claude Design bundle (Editorial magazine prototype)
**Supersedes:** v1 (`2026-04-30-conference-page-redesign-design.md`) and v2 (zinc/Geist) of this file

This spec implements the editorial-magazine direction from a Claude Design prototype. The default state ("Heritage" palette, Editorial typography, Hero variant A) is the production target; tweak panels, hero variants, dark mode, and the in-page agenda tabs are out of scope.

---

## 1. Visual System

### Palette — Heritage (cream + dark navy + orange)
| Token | Value | Use |
|---|---|---|
| `--bg` | `#f4efe6` | Page background (cream) |
| `--bg-2` | `#ebe4d6` | Alternating section bg |
| `--ink` | `#0c0f1a` | Primary text (deep navy) |
| `--ink-2` | `#1a1f2e` | Secondary text |
| `--ink-mute` | `#4d5260` | Muted text |
| `--line` | `rgba(12,15,26,0.12)` | Hairline borders |
| `--line-strong` | `rgba(12,15,26,0.22)` | Stronger borders |
| `--accent` | `#ff5a1f` | Orange — buttons, eyebrow, drop cap, italics |
| `--hero-bg` | `#0c0f1a` | Dark navy hero / pathway / final / footer |
| `--hero-ink` | `#f4efe6` | Cream text on dark navy |
| `--hero-mute` | `rgba(244,239,230,0.62)` | Muted on dark navy |
| `--hero-line` | `rgba(244,239,230,0.16)` | Borders on dark navy |
| `--card` | `#ffffff` | Card surface |

### Typography — "Editorial" pairing
- **Display:** Instrument Serif, italic, weight 400, tracking `-0.02em` (the signature look — large italic display headlines with `<em>` italic-orange phrases).
- **Sans:** Inter Tight (400/500/600/700) for body, UI, buttons.
- **Mono:** JetBrains Mono (400/500) for eyebrow labels, dates, section numbers.
- All loaded from Google Fonts (`fonts.googleapis.com`).

### Editorial conventions
- Section eyebrow uses mono `11px` uppercase letter-spacing `0.18em` colored `var(--accent)`.
- Section number format: `01 / The Problem`, `02 / Audience`, … `08 / Details`.
- Section headlines mix italic Instrument Serif main phrase + italic-orange `<em>` accent phrase: e.g. `Why the Catalyst Conference *exists.*`
- Pull-quote uses italic display, cream-tinted background, orange left border.
- Drop cap: italic Instrument Serif `5em` orange initial on first body paragraph in the Why section.

### Containers and layout
- Container: `max-w-[1320px] mx-auto px-[var(--gutter)]` with `--gutter: clamp(20px, 2.5vw, 40px)`.
- Section padding: `py-[var(--section-py)]` with `--section-py: clamp(80px, 10vw, 160px)`.
- Border-radius: cards `14px`, modal/inputs `8px`.
- Subtle elevation: `--shadow-sm: 0 1px 2px rgba(12,15,26,0.04), 0 4px 14px rgba(12,15,26,0.06)`.

---

## 2. Section Map

| # | Section | Background | Header tag |
|---|---------|------------|-----------|
| 1 | Hero (Variant A — editorial split) | dark navy `--hero-bg` | (no eyebrow; meta-row instead) |
| 2 | Why this conference exists | cream `--bg` | `01 / The Problem` |
| 3 | Who this conference is for | cream-2 `--bg-2` | `02 / Audience` |
| 4 | What makes it different (bento) | dark navy `--hero-bg` | `03 / Our Approach` |
| 5 | Journey of the Day (CTA → /programme) | cream `--bg` | `04 / Agenda` |
| 6 | Workforce Integration Pathway | dark navy `--hero-bg` | `05 / Framework` |
| 7 | Speakers & Contributors | cream `--bg` | `06 / Voices` |
| 8 | Partners & Sponsors | cream-2 `--bg-2` | `07 / Collaborate` |
| 9 | Practical Information | cream `--bg` | `08 / Details` |
| 10 | About Pharmacist Evolve | cream-2 `--bg-2` | (about band) |
| 11 | Final CTA — "Be part of the conversation" | dark navy `--hero-bg` | (final hero) |

The dark navy / cream / cream-2 alternation gives the page rhythm; dark sections form anchor moments (hero, differentiators, pathway, final CTA).

---

## 3. Per-Section Detail

### Section 1 — Hero (Variant A, editorial split)
Dark navy background with two soft radial orange tints (top-left, bottom-right) layered as `::before`.
- **Container:** `padding: clamp(60px, 10vw, 130px) 0 clamp(50px, 7vw, 90px)`.
- **Layout:** 12-col grid, `grid-template-columns: 1.1fr 0.9fr`, `gap: clamp(40px, 6vw, 100px)`, `align-items: end`.
- **Left col:**
  - Meta row: `[orange dot] 23 May 2026 · Warwick, UK · Edition 02` — JetBrains Mono 11px, letter-spacing `0.18em`, uppercase, color `--hero-mute`.
  - H1 display:
    - Line 1: `Catalyst` (italic Instrument Serif, color cream).
    - Line 2: `<em>Conference</em>` (italic, color `--accent`).
    - Size: `clamp(64px, 11vw, 168px)`, `line-height: 0.86`, tracking `-0.025em`.
  - Year line: `2 0 2 6` (mono, letter-spacing `0.5em`, mute).
- **Right col:**
  - Lede paragraph: `Shaping the future of <em>overseas pharmacist</em> workforce integration. A working day for those translating policy into practice.` — `<em>` is bold orange, not italic.
  - Actions: orange filled "Get a Delegate Pass →" (links to Eventbrite) + ghost outlined "View the day" (links to `#programme` or `/programme`).
- **Stats row** (below the grid, full width, separated by hairline):
  - `Date: 23 May` · `Hours: 10–16:30` · `Delegates: 100–120` · `Format: Talks + Workshops`.
  - Values rendered in italic Instrument Serif.

### Section 2 — Why (Folio 01)
Cream background, hairline top + bottom border.
- Section eyebrow: `01 / The Problem`.
- Two-column grid (1fr 1fr, 100px gap):
  - **Left col:** italic display headline `Why the Catalyst Conference *exists.*` (italic-orange `*exists.*`). Below it: pull-quote (orange left border, `--accent/8` tinted bg, italic display): `The Pharmacist Evolve Catalyst Conference exists to change that.` + small mono caps byline `— Convenor's note`.
  - **Right col:** 3 body paragraphs. First paragraph has the italic-orange drop cap. `<strong>` words use `--ink` color and `font-weight: 500` (the design uses 500, not bold).

Existing copy preserved; tightened for the design's rhythm.

### Section 3 — Who (Folio 02)
Cream-2 background.
- Section eyebrow `02 / Audience` + headline `Who this conference is *for.*` + sub: "If you care about building a safe, confident and well-supported pharmacy workforce — this conference is for you."
- 3-column grid of `who-card`:
  - White card, `1px` line border, `radius: 14px`, `padding: var(--card-pad)` (≈28px).
  - Mono `01/02/03` accent number top.
  - Italic display title (clamp 26→34px), `max-width: 13ch`.
  - Body text mute.
  - Bullets with arrow `→` glyph in mono accent. Bullets sit on a top hairline with rows divided by hairline.
  - Hover: lift (`-4px`) + shadow + accent border.
- CTA row below: orange primary "Get a Delegate Pass" + ghost "View Delegates" + ghost "Partner with us".

### Section 4 — Different (Folio 03 — bento on dark navy)
Dark navy bg.
- Section eyebrow `03 / Our Approach` + headline `What makes the Catalyst Conference *different.*` + sub: "This is not a traditional CPD event."
- 6-col bento grid, gap `--gutter`:
  - Card 01 — span 3 — "Lived Experience at the Centre"
  - Card 02 — span 3 — "Practical, Not Performative"
  - Card 03 — span 4 — **featured (orange filled)** — "Cross-Sector Collaboration"
  - Card 04 — span 2 — "Solutions-Focused"
- Each card: glyph monogram (`L / P / C / S`) in tinted-orange square, mono accent num `01–04`, italic display heading, mute body.
- On dark navy: card bg `color-mix(in oklab, var(--hero-ink), transparent 96%)`, border `--hero-line`. Featured card uses solid `--accent` background.
- Responsive: collapses to 2-col, then 1-col.

### Section 5 — Journey of the Day (Folio 04 — CTA only)
Cream background.
- Section eyebrow `04 / Agenda` + headline `The journey of *the day.*` + sub describing morning → midday → afternoon arc.
- Compact 3-block divide-x time strip (10:00 / 12:30 / 14:30 with phase + 1-line description).
- CTAs below: orange primary "Read the full programme →" (links to `/programme`) + ghost "Get a delegate pass →" (Eventbrite).

(The design's full interactive journey-tab UI is at `/programme`, not on this page.)

### Section 6 — Pathway (Folio 05 — From insight to action, dark navy)
Dark navy bg.
- Section eyebrow `05 / Framework` + headline `From insight to *action.*` + sub paragraph.
- 3-step pathway-rail:
  - Each step: 72px circular `dot` containing italic Instrument Serif numeral (01/02/03) in orange. On hover, dot fills orange.
  - Mono accent `label` ("PRE-OSPAP" / "OSPAP & TRAINING" / "POST-REGISTRATION").
  - Italic display title.
  - Mute body description.
- Connecting rail: thin horizontal line absolutely positioned behind the dots, spanning 8% to 92% width.
- Below the rail: `pathway-callout` — bordered box with giant italic orange `"` glyph + body paragraph (the "pilot framework" pull-quote).

### Section 7 — Speakers (Folio 06)
Cream background.
- Section eyebrow `06 / Voices` + headline `Speakers & *contributors.*` + sub: "A curated mix of voices from across the pharmacy sector — convenors, panellists, workshop hosts."
- 4-card grid of speaker placeholders. Each:
  - White card, `1px` border, `padding: 20px`.
  - **Photo:** square aspect, diagonal stripe pattern using `accent/12%` over `--bg-2` — visually communicates "image placeholder" without using a real photo.
  - **Tag pill:** mono caps on `--ink` background pinned bottom-left of photo (e.g. `Convenor`, `Speaker`, `Panel`, `Workshop`).
  - **Initials:** centered italic Instrument Serif 64px, color `accent/30%`. With TBA we leave initials blank or use `?` to keep the placeholder feel.
  - Below photo: italic display name (`Speaker · TBA` for now), mono caps role, mute topic.
- Below grid: dashed-border `speakers-note` with pulsing accent dot — "Full speaker announcements coming soon. Interested in contributing? Get in touch →"

### Section 8 — Partners (Folio 07)
Cream-2 bg.
- Section eyebrow `07 / Collaborate` + headline `Partners & *sponsors.*` + sub paragraph.
- **One tier row** (using the design's `partner-tier` style): tier label "Headline Partners" small-caps mono with trailing hairline, then 3 partner cards in a row.
- Each card: white card, hairline border, `padding: 32px 24px`, `min-height: 120px`, logo centered. Real logos from `/public/images/sponsors/`:
  - `revive-active.webp` (Sponsor)
  - `one-origin.png` (Event Partner)
  - `pharmacy-business.jpg` (Media Partner)
- (Design's 3-tier system is reduced to one row since we have 3 real logos and won't fabricate categories.)
- `partner-cta` block beneath: white card with italic display heading "Partner with the Catalyst Conference" + sub + orange button "Discuss partnership →" (mailto).

### Section 9 — Practical (Folio 08)
Cream bg.
- Section eyebrow `08 / Details` + headline `Practical *information.*` + sub: "Everything you need to know before booking. Reach out if you need anything else."
- 4-card grid:
  - Each card: white, `1px` border, `padding: var(--card-pad)`, `min-height: 200px`.
  - Mono accent glyph: `VEN` / `ACC` / `CTR` / `TKT`.
  - Italic display title (`Venue` / `Accessibility` / `Catering` / `Tickets`).
  - Mute body.
  - Mono `meta` line bottom (e.g. "Wheelchair access · Step-free routes").
- Below grid: centered contact line `For enquiries, please contact [email]` with email styled as orange accent with bottom border.

### Section 10 — About band
Cream-2 bg, centered, max-width 720.
- Eyebrow `About` (mono accent).
- Italic display heading `About Pharmacist Evolve`.
- Paragraph (current copy).
- Mono accent caps link "Learn more about Pharmacist Evolve →" (links to `/about`).

### Section 11 — Final CTA
Dark navy bg with bottom radial accent glow.
- Eyebrow `Tickets`.
- Massive italic display headline `Be part of the *conversation.*` (clamp 56→130px).
- Mute paragraph (current copy).
- Action row: orange primary "Get a delegate pass →" + ghost-on-dark "Partner with us" (mailto).

---

## 4. Interactive Behaviour

### Sticky nav
- Use existing `AppLayout` nav — no custom nav for this page.

### Modal / Register flow
- **Out of scope.** All "Get a Delegate Pass" CTAs link directly to the existing Eventbrite URL (target `_blank`).

### Active-section spy
- **Out of scope** (depends on the custom nav).

### Hover and motion
- Cards: `transform: translateY(-4px)` + shadow + accent border on hover, `0.3s ease`.
- Pathway dots: fill orange + scale `1.05` on hover.
- Pulse animation on the speakers-note dot and (subtly) the hero meta-row dot — `2.4s ease-in-out infinite`.
- Smooth scroll on anchor links: `html { scroll-behavior: smooth; }` — set in scoped style.
- `@media (prefers-reduced-motion: reduce)`: disable pulse and transitions.

---

## 5. Files Changed

1. `resources/views/app.blade.php` — replace Geist links with Instrument Serif + Inter Tight + JetBrains Mono + Fraunces (kept for future tweak compatibility) from Google Fonts.
2. `tailwind.config.js` — set:
   - `fontFamily.sans: ['Inter Tight', system-ui, ...]`
   - `fontFamily.serif: ['Instrument Serif', 'Cormorant Garamond', Georgia, serif]`
   - `fontFamily.mono: ['JetBrains Mono', 'ui-monospace', monospace]`
   - Custom colors for the Heritage palette under `colors.heritage`.
3. `resources/js/Pages/Conference.vue` — full rewrite. Heavy use of CSS variables in a scoped `<style>` block to mirror the design's token system (since these aren't Tailwind utilities). Tailwind utilities used where they suffice.
4. `resources/js/composables/useReveal.js` — keep (used for subtle fade-up).

No new npm dependencies. No new routes. AppLayout untouched.

---

## 6. Acceptance Criteria

- All copy verbatim from the existing v1/v2 implementation (real venue Warwick, real practical details, real sponsor logos).
- All CTAs preserve URLs (Eventbrite, mailto, `/delegates`, `/programme`, `/about`).
- Heritage palette is the only palette (no tweak panel or palette switching).
- Variant A hero only.
- Sections 1, 4, 6, 11 are dark navy; sections 2, 5, 7, 9 are cream; 3, 8, 10 are cream-2.
- Drop cap on first paragraph of Why section.
- Bento grid for differentiators with span-3 / span-3 / span-4 (featured) / span-2.
- Pathway has 3 numbered circular dots connected by a thin rail.
- Speaker cards use diagonal-stripe placeholder photos with TBA tags.
- Renders cleanly at 360, 768, 1024, 1440.
- No console errors.
- AppLayout (header / footer / nav) untouched.
- Skipped: register modal, in-page agenda tabs, tweaks panel, dark-mode toggle, fake speaker names.

---

## 7. Out of Scope

- Site-wide nav and footer styling (lives in `AppLayout` / `Navigation.vue` / `Footer.vue`).
- Other pages.
- Real speaker data / real speaker photography.
- Backend / routes / controllers.
- New JS dependencies.
- Tweak controls and palette switching.
- Multi-step booking modal — Eventbrite handles registration externally.
