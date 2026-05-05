<template>
  <AppLayout>
    <div class="conference-page palette-heritage type-editorial">

      <!-- ============================================================ -->
      <!-- 1. HERO (Variant A — Editorial split, dark navy)             -->
      <!-- ============================================================ -->
      <header class="hero hero-A" id="top">
        <div class="container">
          <div class="hero-grid">
            <div>
              <div class="meta-row">
                <span class="dot"></span>
                <span>23 May 2026</span>
                <span>&middot;</span>
                <span>Warwick, UK</span>
              </div>
              <h1 class="display">
                Catalyst<br /><em>Conference</em>
              </h1>
            </div>
            <div>
              <p class="lede">
                Shaping the future of <em>overseas pharmacist</em> workforce integration. Catalyst is the UK's first dedicated conference focused exclusively on workforce integration for overseas-trained pharmacists.
              </p>
              <div class="actions">
                <a
                  href="https://www.eventbrite.co.uk/e/pharmacist-evolve-the-catalyst-conference-2026-tickets-1983275923676?aff=oddtdtcreator"
                  target="_blank"
                  class="btn btn-primary"
                >
                  Get a delegate pass &rarr;
                </a>
                <Link href="/programme" class="btn btn-on-dark">View the day</Link>
              </div>
            </div>
          </div>

          <div class="hero-stats">
            <div class="hero-stat">
              <div class="label">Date</div>
              <div class="value">23 May</div>
            </div>
            <div class="hero-stat">
              <div class="label">Hours</div>
              <div class="value">10&ndash;16:30</div>
            </div>
            <div class="hero-stat">
              <div class="label">Delegates</div>
              <div class="value">100&ndash;120</div>
            </div>
            <div class="hero-stat">
              <div class="label">Format</div>
              <div class="value">Panels &middot; Workshops</div>
            </div>
          </div>
        </div>
      </header>

      <!-- ============================================================ -->
      <!-- 2. WHY — Folio 01                                            -->
      <!-- ============================================================ -->
      <section class="why" id="why">
        <div class="container">
          <div class="section-head">
            <span class="num">01 / The Purpose</span>
            <div></div>
          </div>
          <div class="why-grid">
            <div class="left">
              <h2 class="display">Why the Catalyst Conference <em>exists.</em></h2>
              <div class="why-quote">
                The Pharmacist Evolve Catalyst Conference exists to change that.
              </div>
            </div>
            <div class="right">
              <p>
                Overseas-trained pharmacists play a vital role in the UK pharmacy workforce. Yet too often their journey is shaped by <strong>fragmented support</strong>, <strong>unclear pathways</strong>, and <strong>inconsistent integration</strong> into practice.
              </p>
              <p>
                Pharmacists are expected to adapt quickly, perform confidently, and contribute safely &mdash; while navigating cultural differences, system complexity, and professional uncertainty. Employers want workforce-ready pharmacists, educators want effective progression pathways, and policymakers want sustainable solutions &mdash; but these conversations rarely happen together, in the same room.
              </p>
              <p>
                This conference creates space for <strong>honest dialogue</strong>, <strong>shared understanding</strong>, and <strong>practical collaboration</strong> &mdash; moving beyond surface-level discussions toward solutions that can be tested, refined, and scaled.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- 3. WHO — Folio 02                                            -->
      <!-- ============================================================ -->
      <section class="who" id="who">
        <div class="container">
          <div class="section-head">
            <span class="num">02 / Audience</span>
            <div>
              <h2 class="display">Who this conference is <em>for.</em></h2>
              <p class="sub">If you care about building a safe, confident and well-supported pharmacy workforce &mdash; this conference is for you.</p>
            </div>
          </div>
          <div class="who-grid">
            <article v-for="(c, i) in whoCards" :key="i" class="who-card">
              <div class="num">{{ c.num }}</div>
              <h3>{{ c.title }}</h3>
              <div class="body">{{ c.body }}</div>
              <ul>
                <li v-for="(p, j) in c.points" :key="j">{{ p }}</li>
              </ul>
            </article>
          </div>
          <div class="who-cta">
            <a
              href="https://www.eventbrite.co.uk/e/pharmacist-evolve-the-catalyst-conference-2026-tickets-1983275923676?aff=oddtdtcreator"
              target="_blank"
              class="btn btn-primary"
            >
              Get a delegate pass &rarr;
            </a>
            <Link href="/delegates" class="btn btn-ghost">View Delegates</Link>
            <a
              href="mailto:faithadebimpe@pharmacistevolve.com?subject=Catalyst Conference 2026 - Partnership Enquiry"
              class="btn btn-ghost"
            >
              Partner with us
            </a>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- 4. DIFFERENT — Folio 03 (bento, dark navy)                  -->
      <!-- ============================================================ -->
      <section class="diff" id="approach">
        <div class="container">
          <div class="section-head">
            <span class="num">03 / What Makes It Different</span>
            <div>
              <h2 class="display">What makes the Catalyst Conference <em>different.</em></h2>
            </div>
          </div>
          <div class="diff-grid">
            <article
              v-for="(c, i) in diffCards"
              :key="i"
              :class="['diff-card', `span-${c.span}`, c.featured ? 'featured' : '']"
            >
              <div class="glyph">{{ c.glyph }}</div>
              <div class="num">{{ c.num }}</div>
              <h3>{{ c.title }}</h3>
              <p>{{ c.body }}</p>
            </article>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- 5. JOURNEY — Folio 04 (CTA only)                            -->
      <!-- ============================================================ -->
      <section class="journey-cta" id="programme">
        <div class="container">
          <div class="section-head">
            <span class="num">04 / Agenda</span>
            <div>
              <h2 class="display">The journey of <em>the day.</em></h2>
              <p class="sub">The conference is designed to take delegates on a clear and intentional journey &mdash; from framing the reality in the morning, to deepening the conversation at midday, to exploring pathways and possibilities in the afternoon.</p>
            </div>
          </div>
          <div class="journey-strip">
            <div v-for="(slot, i) in programmeSlots" :key="i" class="journey-slot">
              <div class="time">{{ slot.time }}</div>
              <div class="phase">{{ slot.phase }}</div>
              <p>{{ slot.description }}</p>
            </div>
          </div>
          <div class="who-cta">
            <Link href="/programme" class="btn btn-primary">Read the full programme &rarr;</Link>
            <a
              href="https://www.eventbrite.co.uk/e/pharmacist-evolve-the-catalyst-conference-2026-tickets-1983275923676?aff=oddtdtcreator"
              target="_blank"
              class="btn btn-ghost"
            >
              Get a delegate pass
            </a>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- 6. PATHWAY — Folio 05 (dark navy)                            -->
      <!-- ============================================================ -->
      <section class="pathway" id="pathway">
        <div class="container">
          <div class="section-head">
            <span class="num">05 / Centrepiece</span>
            <div>
              <h2 class="display">From insight to <em>action.</em></h2>
              <p class="sub">A central feature of the Catalyst Conference is the introduction of the Overseas Pharmacist Workforce Integration Pathway &mdash; bringing together insights from lived experience, employer needs, education frameworks, and workforce priorities.</p>
            </div>
          </div>
          <div class="pathway-rail">
            <div v-for="(s, i) in pathwayStages" :key="i" class="pathway-step">
              <div class="dot">{{ s.num }}</div>
              <h3>{{ s.label }}</h3>
              <p>{{ s.body }}</p>
            </div>
          </div>
          <div class="pathway-callout">
            <div class="pull">&ldquo;</div>
            <p>
              This is not presented as a finished solution, but as a <em>pilot framework</em> that invites collaboration, challenge, and shared ownership from across the sector. The Catalyst Conference marks the <em>beginning of wider collaboration</em>, not the end of the conversation.
            </p>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- 7. SPEAKERS — Folio 06                                       -->
      <!-- ============================================================ -->
      <section class="speakers" id="speakers">
        <div class="container">
          <div class="section-head">
            <span class="num">06 / Voices</span>
            <div>
              <h2 class="display">Speakers &amp; <em>contributors.</em></h2>
              <p class="sub">Speakers and contributors include voices from across the pharmacy sector.</p>
            </div>
          </div>
          <div class="speakers-grid">
            <article v-for="(s, i) in speakers" :key="i" class="speaker-card">
              <div class="photo">
                <img :src="s.photo" :alt="s.name" loading="lazy" />
                <span class="tag">{{ s.tag }}</span>
              </div>
              <h4>{{ s.name }}</h4>
              <div class="role">{{ s.role }}</div>
              <div class="topic">{{ s.topic }}</div>
            </article>
          </div>
          <div class="speakers-note">
            <span class="pulse"></span>
            <span>
              <strong>More speakers will be announced in the coming weeks.</strong>
              Interested in contributing or participating in the conversation?
              <a href="mailto:faithadebimpe@pharmacistevolve.com">Get in touch &rarr;</a>
            </span>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- 8. PARTNERS — Folio 07                                       -->
      <!-- ============================================================ -->
      <section class="partners" id="partners">
        <div class="container">
          <div class="section-head">
            <span class="num">07 / Collaborate</span>
            <div>
              <h2 class="display">Partners &amp; <em>sponsors.</em></h2>
              <p class="sub">The partners and sponsors of the Catalyst Conference are more than event supporters &mdash; they are contributors to meaningful workforce conversations and solutions.</p>
            </div>
          </div>
          <div class="partner-tier">
            <div class="tier-label">Headline Partners</div>
            <div class="partner-row headline">
              <div v-for="(p, i) in partners" :key="i" class="partner-card">
                <div class="partner-tier-tag">{{ p.tier }}</div>
                <img :src="p.logo" :alt="p.name" :class="['partner-logo', p.heightClass]" />
              </div>
            </div>
          </div>
          <div class="partner-cta-row">
            <a
              href="mailto:faithadebimpe@pharmacistevolve.com?subject=Catalyst Conference 2026 - Partnership Enquiry"
              class="btn btn-primary"
            >
              Discuss partnership opportunities &rarr;
            </a>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- 9. PRACTICAL — Folio 08                                      -->
      <!-- ============================================================ -->
      <section class="practical" id="practical">
        <div class="container">
          <div class="section-head">
            <span class="num">08 / Details</span>
            <div>
              <h2 class="display">Practical <em>information.</em></h2>
            </div>
          </div>
          <div class="practical-grid">
            <article v-for="(c, i) in practicalInfo" :key="i" class="practical-card">
              <div class="glyph">{{ c.glyph }}</div>
              <h4>{{ c.title }}</h4>
              <p>{{ c.body }}</p>
            </article>
          </div>
          <div class="practical-contact">
            For enquiries, please contact
            <a href="mailto:faithadebimpe@pharmacistevolve.com">faithadebimpe@pharmacistevolve.com</a>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- 10. ABOUT BAND                                               -->
      <!-- ============================================================ -->
      <section class="about" id="about">
        <div class="container">
          <div class="about-inner">
            <h3>About Pharmacist Evolve</h3>
            <p>
              Pharmacist Evolve is a platform dedicated to supporting overseas-trained pharmacists to integrate, progress and thrive within the UK workforce. Through coaching, community, advocacy and strategic collaboration, Pharmacist Evolve works to turn complexity into clarity &mdash; supporting both individual pharmacists and the wider systems they work within.
            </p>
            <Link href="/about" class="link">Learn more about Pharmacist Evolve &rarr;</Link>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- 11. FINAL CTA                                                -->
      <!-- ============================================================ -->
      <section class="final" id="final">
        <div class="container">
          <div class="final-inner">
            <h2 class="display">Be part of the <em>conversation.</em></h2>
            <p>
              The future of the pharmacy workforce will be shaped by the conversations we are willing to have and the actions we are willing to test.
            </p>
            <p>
              Join us at the Pharmacist Evolve Catalyst Conference and be part of building a more <strong>confident, supported, and sustainable workforce</strong>.
            </p>
            <div class="actions">
              <a
                href="https://www.eventbrite.co.uk/e/pharmacist-evolve-the-catalyst-conference-2026-tickets-1983275923676?aff=oddtdtcreator"
                target="_blank"
                class="btn btn-primary"
              >
                Get a delegate pass &rarr;
              </a>
              <Link href="/delegates" class="btn btn-on-dark">View Delegates</Link>
              <a
                href="mailto:faithadebimpe@pharmacistevolve.com?subject=Catalyst Conference 2026 - Partnership Enquiry"
                class="btn btn-on-dark"
              >
                Partner with us
              </a>
            </div>
          </div>
        </div>
      </section>

    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

const whoCards = [
  {
    num: '01',
    title: 'Overseas-trained & early career pharmacists',
    body: 'For pharmacists who have completed OSPAP, navigating early-career UK practice, or recently registered.',
    points: [
      'Post-OSPAP pharmacists navigating UK practice',
      'Pharmacists in foundation training or early career roles',
      'Those seeking clarity, confidence, and sustainable career progression',
    ],
  },
  {
    num: '02',
    title: 'Employers & pharmacy leaders',
    body: 'For pharmacy owners and operational leaders integrating overseas-trained colleagues into UK teams.',
    points: [
      'Pharmacy owners and superintendents',
      'PCN, GP, and NHS pharmacy leaders',
      'Workforce, education, and inclusion leads',
    ],
  },
  {
    num: '03',
    title: 'Educators, regulators & industry partners',
    body: 'For those shaping curricula, policy and the pathways pharmacists travel through.',
    points: [
      'Universities and training providers',
      'Professional bodies and sector organisations',
      'Industry partners invested in workforce development and quality',
    ],
  },
]

const diffCards = [
  { num: '01', span: 3, glyph: 'L', title: 'Lived experience at the centre', body: 'Real insights from overseas pharmacists who have navigated the system — not theoretical perspectives.' },
  { num: '02', span: 3, glyph: 'P', title: 'Practical, not performative', body: 'Conversations grounded in what works, what doesn\'t, and why.' },
  { num: '03', span: 4, featured: true, glyph: 'C', title: 'Cross-sector collaboration', body: 'Pharmacists, employers, educators and policymakers in one room, engaging in shared problem-solving.' },
  { num: '04', span: 2, glyph: 'S', title: 'Solutions-focused', body: 'Moving from problem identification toward actionable pathways and pilot-ready ideas.' },
]

const programmeSlots = [
  { time: '10:00', phase: 'Morning', description: 'Framing the reality.' },
  { time: '12:30', phase: 'Midday', description: 'Deepening the conversation.' },
  { time: '14:30', phase: 'Afternoon', description: 'Pathways and possibilities.' },
]

const pathwayStages = [
  { num: '01', label: 'Pre-OSPAP', body: 'Preparation and readiness support.' },
  { num: '02', label: 'OSPAP & training', body: 'Structured training support.' },
  { num: '03', label: 'Post-registration', body: 'Integration and career progression.' },
]

const speakers = [
  {
    name: 'Tase Oputu',
    role: 'President, Royal College of Pharmacy',
    topic: 'Pharmacy\'s role in population health, equity and high-value medicines systems.',
    tag: 'Keynote',
    photo: '/images/speakers/tase-oputu.png',
  },
  {
    name: 'Trevor Gore',
    role: 'Honorary member, Royal Pharmaceutical Society',
    topic: 'Beyond recruitment — psychological safety, belonging and workforce integration.',
    tag: 'Speaker',
    photo: '/images/speakers/trevor-gore.jpeg',
  },
  {
    name: 'Nirusha Govender',
    role: 'Strategic pharmacy & health systems leader, FRCPharm',
    topic: 'Workforce transformation and inclusive integrated care — an OSPAP success story.',
    tag: 'Speaker',
    photo: '/images/speakers/nirusha-govender.jpeg',
  },
  {
    name: 'Sobha Sharma Kandel',
    role: 'Clinical pharmacist, founder of three London pharmacies, FRCPharm',
    topic: 'Mentoring overseas pharmacists into UK practice; community health and inclusion.',
    tag: 'Speaker',
    photo: '/images/speakers/sobha-sharma-kandel.jpeg',
  },
  {
    name: 'Nicola Stockmann',
    role: 'Pharmacy Operations Manager, Hampshire Hospitals · Past-President, APTUK',
    topic: 'Developing the whole pharmacy workforce — the technician profession in integrated care.',
    tag: 'Speaker',
    photo: '/images/speakers/nicola-stockmann.jpg',
  },
  {
    name: 'Jawn Jiang',
    role: 'Director, GM Graham Pharmacies · Independent Prescriber',
    topic: 'Structured training environments for OSPAP candidates and emerging pharmacists.',
    tag: 'Panel',
    photo: '/images/speakers/jawn-jiang.png',
  },
  {
    name: 'Bisola Sonoiki',
    role: 'Prescribing pharmacist · ICB system-level work',
    topic: 'Cross-sector integration — community, primary and secondary care working together.',
    tag: 'Panel',
    photo: '/images/speakers/bisola-sonoiki.png',
  },
  {
    name: 'Gift Chukwuma',
    role: 'Clinical pharmacist, community & digital pharmacy',
    topic: 'A lived account of transitioning into UK practice as an overseas-trained pharmacist.',
    tag: 'Lived experience',
    photo: '/images/speakers/gift-chukwuma.jpg',
  },
  {
    name: 'Ahmed Abdeldayem',
    role: 'Rotational clinical pharmacist, University Hospital Southampton',
    topic: 'Foundation training, prescribing safety, and supporting newly qualified pharmacists.',
    tag: 'Workshop',
    photo: '/images/speakers/ahmed-abdeldayem.jpeg',
  },
]

const partners = [
  { tier: 'Sponsor', name: 'Revive Active', logo: '/images/sponsors/revive-active.webp', heightClass: 'h-20 sm:h-24' },
  { tier: 'Event partner', name: 'One Origin', logo: '/images/sponsors/one-origin.png', heightClass: 'h-14 sm:h-16' },
  { tier: 'Media partner', name: 'Pharmacy Business', logo: '/images/sponsors/pharmacy-business.jpg', heightClass: 'h-14 sm:h-16' },
]

const practicalInfo = [
  { glyph: 'VEN', title: 'Venue', body: 'The Slate Conferences, Warwick CV4 7SH.' },
  { glyph: 'ACC', title: 'Accessibility', body: 'Fully accessible. Contact us with any requirements.' },
  { glyph: 'CTR', title: 'Catering', body: 'All dietary requirements accommodated.' },
  { glyph: 'TKT', title: 'Tickets', body: 'Get your delegate pass now via Eventbrite.' },
]
</script>

<style scoped>
/* ============================================================
   Heritage palette — cream + dark navy + orange
   Editorial typography — Instrument Serif italic display
   ============================================================ */
.conference-page {
  /* Heritage palette (default) */
  --bg: #f4efe6;
  --bg-2: #ebe4d6;
  --ink: #0c0f1a;
  --ink-2: #1a1f2e;
  --ink-mute: #4d5260;
  --line: rgba(12, 15, 26, 0.12);
  --line-strong: rgba(12, 15, 26, 0.22);
  --accent: #ff5a1f;
  --accent-ink: #ffffff;
  --hero-bg: #0c0f1a;
  --hero-ink: #f4efe6;
  --hero-mute: rgba(244, 239, 230, 0.62);
  --hero-line: rgba(244, 239, 230, 0.16);
  --card: #ffffff;
  --card-ink: #0c0f1a;

  /* Type stacks */
  --serif: 'Instrument Serif', 'Cormorant Garamond', Georgia, serif;
  --sans: 'Inter Tight', -apple-system, BlinkMacSystemFont, system-ui, sans-serif;
  --mono: 'JetBrains Mono', ui-monospace, 'SFMono-Regular', monospace;
  --display-family: var(--sans);
  --display-style: normal;
  --display-weight: 700;
  --display-tracking: -0.04em;

  /* Density (default) */
  --section-py: clamp(80px, 10vw, 160px);
  --gutter: clamp(20px, 2.5vw, 40px);
  --card-pad: 28px;
  --container: 1320px;

  --radius: 14px;
  --radius-sm: 8px;
  --shadow-sm: 0 1px 2px rgba(12, 15, 26, 0.04), 0 4px 14px rgba(12, 15, 26, 0.06);

  background: var(--bg);
  color: var(--ink);
  font-family: var(--sans);
  font-feature-settings: 'ss01', 'cv11';
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  font-size: 16px;
  line-height: 1.5;
}

/* universal box-sizing within page */
.conference-page * { box-sizing: border-box; }
.conference-page :deep(html) { scroll-behavior: smooth; }
.conference-page img { max-width: 100%; display: block; }
.conference-page button { font-family: inherit; cursor: pointer; }
.conference-page a { color: inherit; text-decoration: none; }

.container {
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 var(--gutter);
}

/* ===== Display type ===== */
.display {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  letter-spacing: var(--display-tracking);
  line-height: 0.94;
}
.eyebrow {
  font-family: var(--mono);
  font-size: 11px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  font-weight: 500;
  color: var(--ink-mute);
}
.eyebrow-accent { color: var(--accent); }

/* ===== Buttons ===== */
.btn {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 14px 22px;
  border-radius: 999px;
  font-family: var(--sans);
  font-size: 14px;
  font-weight: 500;
  letter-spacing: -0.01em;
  border: 1px solid transparent;
  transition: transform 0.2s ease, background 0.2s, color 0.2s, border-color 0.2s;
  white-space: nowrap;
  cursor: pointer;
}
.btn:hover { transform: translateY(-1px); }
.btn-primary { background: var(--accent); color: var(--accent-ink); }
.btn-primary:hover { background: color-mix(in oklab, var(--accent), black 12%); }
.btn-ghost { background: transparent; color: var(--ink); border-color: var(--line-strong); }
.btn-ghost:hover { background: var(--ink); color: var(--bg); border-color: var(--ink); }
.btn-on-dark { background: transparent; color: var(--hero-ink); border-color: var(--hero-line); }
.btn-on-dark:hover { background: var(--hero-ink); color: var(--hero-bg); }

/* ===== Hero ===== */
.hero {
  background: var(--hero-bg);
  color: var(--hero-ink);
  position: relative;
  overflow: hidden;
}
.hero::before {
  content: '';
  position: absolute; inset: 0;
  background:
    radial-gradient(900px 500px at 18% -10%, color-mix(in oklab, var(--accent), transparent 78%), transparent 60%),
    radial-gradient(700px 400px at 100% 110%, color-mix(in oklab, var(--accent), transparent 88%), transparent 60%);
  pointer-events: none;
}
.hero .container { position: relative; }

.hero-A .hero-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: clamp(40px, 6vw, 100px);
  align-items: end;
  padding: clamp(60px, 10vw, 130px) 0 clamp(50px, 7vw, 90px);
  position: relative;
}
.hero-A .meta-row {
  display: flex; align-items: center; gap: 12px;
  font-family: var(--mono); font-size: 11px; letter-spacing: 0.18em;
  text-transform: uppercase; color: var(--hero-mute);
  margin-bottom: 28px;
}
.hero-A .meta-row .dot {
  width: 6px; height: 6px; border-radius: 50%;
  background: var(--accent);
  animation: pulse 2.4s ease-in-out infinite;
}
.hero-A h1.display {
  font-size: clamp(64px, 11vw, 168px);
  margin: 0 0 10px;
  letter-spacing: -0.025em;
  line-height: 0.86;
}
.hero-A h1 em {
  font-style: normal;
  color: var(--accent);
  font-weight: 700;
}
.hero-A .year {
  font-family: var(--mono);
  font-size: clamp(13px, 1vw, 14px);
  letter-spacing: 0.5em;
  color: var(--hero-mute);
  margin-top: 6px;
}
.hero-A .lede {
  font-size: clamp(17px, 1.4vw, 20px);
  line-height: 1.45;
  color: color-mix(in oklab, var(--hero-ink), transparent 18%);
  max-width: 480px;
  margin: 0 0 28px;
}
.hero-A .lede em { color: var(--accent); font-style: normal; font-weight: 600; }
.hero-A .actions { display: flex; gap: 12px; flex-wrap: wrap; }
.hero-A .actions .btn-primary { padding: 16px 28px; }

.hero-stats {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  border-top: 1px solid var(--hero-line);
  padding-top: 28px;
  margin-top: 60px;
  margin-bottom: clamp(60px, 8vw, 100px);
}
.hero-stat { padding: 0 24px 0 0; border-right: 1px solid var(--hero-line); }
.hero-stat:last-child { border-right: none; padding-right: 0; }
.hero-stat .label {
  font-family: var(--mono); font-size: 10px; letter-spacing: 0.2em;
  text-transform: uppercase; color: var(--hero-mute);
  margin-bottom: 8px;
}
.hero-stat .value {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  font-size: clamp(20px, 2.2vw, 28px);
  line-height: 1.1;
  letter-spacing: -0.02em;
}
@media (max-width: 880px) {
  .hero-A .hero-grid { grid-template-columns: 1fr; padding-bottom: 40px; }
  .hero-stats { grid-template-columns: repeat(2, 1fr); gap: 24px; }
  .hero-stat { border-right: none; padding-right: 0; }
}

@keyframes pulse {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.5; transform: scale(1.4); }
}

/* ===== Section base ===== */
.conference-page section { padding: var(--section-py) 0; position: relative; }
.section-head {
  display: grid; grid-template-columns: auto 1fr; gap: 16px;
  align-items: baseline; margin-bottom: 64px;
}
.section-head .num {
  font-family: var(--mono); font-size: 12px; letter-spacing: 0.18em;
  color: var(--accent); text-transform: uppercase;
}
.section-head h2 {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  letter-spacing: -0.025em;
  font-size: clamp(40px, 5.5vw, 76px);
  line-height: 0.96;
  margin: 0;
  max-width: 18ch;
}
.section-head h2 em { color: var(--accent); font-style: normal; }
.section-head .sub {
  font-size: 16px; color: var(--ink-mute);
  max-width: 520px; margin-top: 8px;
}

/* ===== WHY ===== */
.why {
  background: var(--bg);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}
.why-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(40px, 6vw, 100px);
  align-items: start;
}
.why-grid .left h2.display {
  font-size: clamp(40px, 5.2vw, 76px);
  margin: 0 0 24px;
  line-height: 0.96;
}
.why-grid .left h2 em { color: var(--accent); font-style: normal; }
.why-grid .right p {
  font-size: 17px; line-height: 1.6;
  color: var(--ink-mute);
  margin: 0 0 18px;
  max-width: 56ch;
}
.why-grid .right p:first-child::first-letter {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-size: 5em;
  float: left;
  line-height: 0.85;
  margin: 6px 12px 0 0;
  color: var(--accent);
}
.why-grid .right p strong { color: var(--ink); font-weight: 500; }

.why-quote {
  margin-top: 36px;
  padding: 28px 32px;
  border-left: 3px solid var(--accent);
  background: color-mix(in oklab, var(--accent), transparent 92%);
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-size: clamp(20px, 1.8vw, 26px);
  line-height: 1.3;
  letter-spacing: -0.01em;
  color: var(--ink);
}
.why-quote .by {
  display: block; margin-top: 12px;
  font-family: var(--mono); font-style: normal;
  font-size: 11px; letter-spacing: 0.18em; text-transform: uppercase;
  color: var(--ink-mute);
}
@media (max-width: 880px) {
  .why-grid { grid-template-columns: 1fr; }
}

/* ===== WHO ===== */
.who { background: var(--bg-2); }
.who-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--gutter);
}
.who-card {
  background: var(--card);
  color: var(--card-ink);
  border-radius: var(--radius);
  padding: var(--card-pad);
  border: 1px solid var(--line);
  display: flex; flex-direction: column;
  position: relative;
  transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}
.who-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-sm);
  border-color: var(--accent);
}
.who-card .num {
  font-family: var(--mono); font-size: 11px; letter-spacing: 0.18em;
  color: var(--accent); margin-bottom: 28px;
}
.who-card h3 {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  font-size: clamp(26px, 2.4vw, 34px);
  line-height: 1.05;
  margin: 0 0 18px;
  letter-spacing: -0.02em;
  max-width: 13ch;
}
.who-card .body { color: var(--ink-mute); font-size: 15px; line-height: 1.5; margin-bottom: 24px; }
.who-card ul {
  list-style: none; padding: 0; margin: 0;
  border-top: 1px solid var(--line);
  padding-top: 16px;
}
.who-card ul li {
  font-size: 14px; padding: 10px 0;
  border-bottom: 1px solid var(--line);
  display: flex; gap: 10px; align-items: start;
  color: var(--card-ink);
}
.who-card ul li:last-child { border-bottom: none; }
.who-card ul li::before {
  content: '→'; color: var(--accent); flex-shrink: 0;
  font-family: var(--mono);
}
.who-cta {
  display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;
  margin-top: 56px;
}
@media (max-width: 880px) {
  .who-grid { grid-template-columns: 1fr; }
}

/* ===== DIFF (bento, dark) ===== */
.diff { background: var(--hero-bg); color: var(--hero-ink); }
.diff .section-head h2 { color: var(--hero-ink); }
.diff .section-head .num { color: var(--accent); }
.diff .section-head .sub { color: var(--hero-mute); }
.diff-grid {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: var(--gutter);
}
.diff-card {
  border-radius: var(--radius);
  padding: var(--card-pad);
  border: 1px solid var(--hero-line);
  background: color-mix(in oklab, var(--hero-ink), transparent 96%);
  position: relative;
  overflow: hidden;
  display: flex; flex-direction: column; gap: 14px;
  min-height: 260px;
  transition: transform 0.3s, border-color 0.3s, background 0.3s;
}
.diff-card:hover {
  transform: translateY(-4px);
  border-color: var(--accent);
  background: color-mix(in oklab, var(--hero-ink), transparent 92%);
}
.diff-card .num {
  font-family: var(--mono); font-size: 11px; letter-spacing: 0.18em;
  color: var(--accent);
}
.diff-card h3 {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  font-size: clamp(22px, 2vw, 28px);
  margin: 0;
  line-height: 1.05;
  letter-spacing: -0.02em;
}
.diff-card p { color: var(--hero-mute); font-size: 14.5px; line-height: 1.5; margin: 0; flex-grow: 1; }
.diff-card.span-3 { grid-column: span 3; }
.diff-card.span-2 { grid-column: span 2; }
.diff-card.span-4 { grid-column: span 4; min-height: 320px; }
.diff-card.featured {
  background: var(--accent);
  color: var(--accent-ink);
  border-color: var(--accent);
}
.diff-card.featured .num { color: var(--accent-ink); opacity: 0.7; }
.diff-card.featured p { color: color-mix(in oklab, var(--accent-ink), transparent 18%); }
.diff-card .glyph {
  width: 44px; height: 44px; border-radius: 12px;
  background: color-mix(in oklab, var(--accent), transparent 75%);
  border: 1px solid var(--hero-line);
  display: grid; place-items: center;
  color: var(--accent);
  font-family: var(--mono); font-weight: 600; font-size: 14px;
}
.diff-card.featured .glyph {
  background: color-mix(in oklab, var(--accent-ink), transparent 80%);
  color: var(--accent-ink); border-color: var(--accent-ink);
}
@media (max-width: 1100px) {
  .diff-grid { grid-template-columns: repeat(2, 1fr); }
  .diff-card.span-3, .diff-card.span-2, .diff-card.span-4 { grid-column: span 2; }
}
@media (max-width: 700px) {
  .diff-grid { grid-template-columns: 1fr; }
  .diff-card.span-3, .diff-card.span-2, .diff-card.span-4 { grid-column: span 1; }
}

/* ===== JOURNEY (CTA only) ===== */
.journey-cta { background: var(--bg); }
.journey-strip {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  margin-top: -16px; /* tighten to section-head */
}
.journey-slot {
  padding: 28px 28px 28px 0;
  border-right: 1px solid var(--line);
}
.journey-slot:last-child { border-right: none; padding-right: 0; }
.journey-slot:not(:first-child) { padding-left: 28px; }
.journey-slot .time {
  font-family: var(--mono);
  font-size: clamp(28px, 3vw, 36px);
  color: var(--ink);
  letter-spacing: 0.02em;
}
.journey-slot .phase {
  font-family: var(--mono); font-size: 11px; letter-spacing: 0.18em;
  text-transform: uppercase; color: var(--accent);
  margin-top: 4px; margin-bottom: 12px;
}
.journey-slot p { color: var(--ink-mute); font-size: 15px; line-height: 1.5; margin: 0; max-width: 36ch; }
@media (max-width: 880px) {
  .journey-strip { grid-template-columns: 1fr; }
  .journey-slot { border-right: none; border-bottom: 1px solid var(--line); padding: 24px 0 !important; }
  .journey-slot:last-child { border-bottom: none; }
}

/* ===== PATHWAY (dark) ===== */
.pathway { background: var(--hero-bg); color: var(--hero-ink); }
.pathway .section-head h2 { color: var(--hero-ink); }
.pathway .section-head .num { color: var(--accent); }
.pathway .section-head .sub { color: var(--hero-mute); }
.pathway-rail {
  position: relative;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
  margin-top: 28px;
}
.pathway-rail::before {
  content: '';
  position: absolute; left: 8%; right: 8%; top: 36px;
  height: 1px; background: var(--hero-line);
}
.pathway-step {
  position: relative;
  padding: 0 24px;
  border-right: 1px solid var(--hero-line);
}
.pathway-step:last-child { border-right: none; }
.pathway-step .dot {
  width: 72px; height: 72px; border-radius: 50%;
  background: var(--hero-bg);
  border: 1px solid var(--hero-line);
  display: grid; place-items: center;
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-size: 32px;
  color: var(--accent);
  margin: 0 auto 36px;
  position: relative; z-index: 1;
  transition: all 0.3s;
}
.pathway-step:hover .dot {
  background: var(--accent); color: var(--accent-ink);
  border-color: var(--accent);
  transform: scale(1.05);
}
.pathway-step .label {
  font-family: var(--mono); font-size: 11px; letter-spacing: 0.18em;
  color: var(--accent); text-transform: uppercase;
  text-align: center; margin-bottom: 12px;
}
.pathway-step h3 {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  font-size: clamp(24px, 2.2vw, 32px);
  margin: 0 0 12px;
  text-align: center;
  letter-spacing: -0.02em;
}
.pathway-step p {
  color: var(--hero-mute); font-size: 14.5px; line-height: 1.5;
  margin: 0 auto; text-align: center; max-width: 32ch;
}
.pathway-callout {
  margin-top: 80px;
  padding: 32px clamp(28px, 4vw, 56px);
  border: 1px solid var(--hero-line);
  border-radius: var(--radius);
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 32px;
  align-items: center;
}
.pathway-callout .pull {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-size: clamp(40px, 5vw, 64px);
  line-height: 0.9; color: var(--accent);
  letter-spacing: -0.02em;
}
.pathway-callout p {
  font-size: 17px; line-height: 1.5;
  color: var(--hero-mute); margin: 0; max-width: 60ch;
}
.pathway-callout p em { font-style: normal; color: var(--hero-ink); font-weight: 500; }
@media (max-width: 880px) {
  .pathway-rail { grid-template-columns: 1fr; }
  .pathway-rail::before { display: none; }
  .pathway-step { border-right: none; border-bottom: 1px solid var(--hero-line); padding: 36px 0; }
  .pathway-step:last-child { border-bottom: none; }
  .pathway-callout { grid-template-columns: 1fr; gap: 18px; }
}

/* ===== SPEAKERS ===== */
.speakers { background: var(--bg); }
.speakers-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--gutter);
}
.speaker-card {
  background: var(--card);
  color: var(--card-ink);
  border-radius: var(--radius);
  border: 1px solid var(--line);
  padding: 20px;
  display: flex; flex-direction: column;
  transition: all 0.3s ease;
}
.speaker-card:hover {
  transform: translateY(-4px);
  border-color: var(--accent);
  box-shadow: var(--shadow-sm);
}
.speaker-card .photo {
  aspect-ratio: 1;
  border-radius: 8px;
  background: var(--bg-2);
  margin-bottom: 16px;
  position: relative;
  overflow: hidden;
}
.speaker-card .photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}
.speaker-card:hover .photo img { transform: scale(1.03); }
.speaker-card .photo .tag {
  position: absolute;
  bottom: 12px; left: 12px;
  font-family: var(--mono); font-size: 10px; letter-spacing: 0.15em;
  text-transform: uppercase;
  background: var(--ink); color: var(--bg);
  padding: 4px 10px; border-radius: 999px;
  z-index: 1;
}
.speaker-card h4 {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  font-size: 22px; margin: 0 0 4px;
  letter-spacing: -0.01em;
}
.speaker-card .role {
  font-family: var(--mono); font-size: 10px; letter-spacing: 0.15em;
  text-transform: uppercase; color: var(--ink-mute);
  margin-bottom: 12px;
}
.speaker-card .topic { font-size: 14px; color: var(--ink-mute); line-height: 1.4; }

.speakers-note {
  margin-top: 36px; padding: 18px 24px;
  border: 1px dashed var(--line-strong);
  border-radius: var(--radius);
  display: flex; align-items: center; gap: 14px;
  font-size: 14px; color: var(--ink-mute);
}
.speakers-note strong { color: var(--ink); font-weight: 500; }
.speakers-note a {
  color: var(--accent);
  border-bottom: 1px solid var(--accent);
  padding-bottom: 1px;
}
.speakers-note .pulse {
  width: 8px; height: 8px; border-radius: 50%; background: var(--accent);
  animation: pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@media (max-width: 880px) { .speakers-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 540px) { .speakers-grid { grid-template-columns: 1fr; max-width: 360px; margin: 0 auto; } }

/* ===== PARTNERS ===== */
.partners { background: var(--bg-2); }
.partner-tier { margin-bottom: 48px; }
.partner-tier:last-child { margin-bottom: 0; }
.partner-tier .tier-label {
  font-family: var(--mono); font-size: 11px; letter-spacing: 0.18em;
  color: var(--ink-mute); text-transform: uppercase;
  margin-bottom: 16px;
  display: flex; align-items: baseline; gap: 12px;
}
.partner-tier .tier-label::after {
  content: ''; flex-grow: 1; height: 1px; background: var(--line);
}
.partner-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--gutter);
}
.partner-card {
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  padding: 32px 24px;
  display: flex; flex-direction: column; align-items: center; gap: 18px;
  min-height: 160px;
  position: relative;
  transition: all 0.3s;
}
.partner-card:hover {
  border-color: var(--accent);
  transform: translateY(-2px);
}
.partner-tier-tag {
  font-family: var(--mono); font-size: 10px; letter-spacing: 0.18em;
  color: var(--ink-mute); text-transform: uppercase;
}
.partner-logo {
  width: auto;
  object-fit: contain;
  flex: 1;
}
.partner-cta-row {
  margin-top: 48px;
  display: flex;
  justify-content: center;
}
@media (max-width: 880px) {
  .partner-row { grid-template-columns: 1fr; }
}

/* ===== PRACTICAL ===== */
.practical { background: var(--bg); }
.practical-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--gutter);
}
.practical-card {
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  padding: var(--card-pad);
  display: flex; flex-direction: column; gap: 12px;
  min-height: 200px;
  transition: all 0.3s;
}
.practical-card:hover {
  transform: translateY(-4px);
  border-color: var(--accent);
  box-shadow: var(--shadow-sm);
}
.practical-card .glyph {
  font-family: var(--mono); font-size: 11px; letter-spacing: 0.18em;
  color: var(--accent); text-transform: uppercase;
}
.practical-card h4 {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  font-size: 26px; margin: 0;
  letter-spacing: -0.01em;
}
.practical-card p { font-size: 14px; color: var(--ink-mute); line-height: 1.5; margin: 0; }
.practical-card .meta {
  margin-top: auto; padding-top: 12px; border-top: 1px solid var(--line);
  font-family: var(--mono); font-size: 11px; letter-spacing: 0.05em;
  color: var(--ink);
}
.practical-contact {
  margin-top: 36px;
  text-align: center; font-size: 14px; color: var(--ink-mute);
}
.practical-contact a {
  color: var(--accent);
  border-bottom: 1px solid var(--accent);
  padding-bottom: 1px;
}
@media (max-width: 880px) { .practical-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 540px) { .practical-grid { grid-template-columns: 1fr; } }

/* ===== ABOUT ===== */
.about { background: var(--bg-2); text-align: center; }
.about-inner { max-width: 720px; margin: 0 auto; }
.about h3 {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  font-size: clamp(36px, 4.5vw, 56px);
  margin: 16px 0 24px;
  letter-spacing: -0.02em;
  line-height: 1;
}
.about p { font-size: 17px; line-height: 1.6; color: var(--ink-mute); margin: 0 0 20px; }
.about .link {
  font-family: var(--mono); font-size: 12px; letter-spacing: 0.15em;
  text-transform: uppercase; color: var(--accent);
  border-bottom: 1px solid var(--accent); padding-bottom: 2px;
  display: inline-block;
}

/* ===== FINAL CTA ===== */
.final {
  background: var(--hero-bg);
  color: var(--hero-ink);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.final::before {
  content: '';
  position: absolute; inset: 0;
  background: radial-gradient(800px 500px at 50% 100%, color-mix(in oklab, var(--accent), transparent 75%), transparent 70%);
  pointer-events: none;
}
.final-inner { position: relative; max-width: 880px; margin: 0 auto; }
.final h2 {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  font-size: clamp(56px, 9vw, 130px);
  line-height: 0.92;
  margin: 16px 0 28px;
  letter-spacing: -0.025em;
}
.final h2 em { color: var(--accent); font-style: normal; }
.final p {
  font-size: 18px; line-height: 1.55;
  color: var(--hero-mute);
  max-width: 560px; margin: 0 auto 36px;
}
.final .actions { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }

/* ===== Reduced motion ===== */
@media (prefers-reduced-motion: reduce) {
  .hero-A .meta-row .dot,
  .speakers-note .pulse {
    animation: none !important;
  }
  .conference-page * {
    transition-duration: 0.01ms !important;
  }
}
</style>
