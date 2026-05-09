<template>
  <AppLayout>
    <div class="conference-page palette-heritage type-editorial">

      <!-- ============================================================ -->
      <!-- 1. HERO (Variant A ·Editorial split, dark navy)             -->
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
      <!-- TABS NAV (sticky)                                            -->
      <!-- ============================================================ -->
      <nav class="conf-tabs" aria-label="Conference sections">
        <div class="container">
          <a href="#speakers" class="conf-tab">Speakers</a>
          <a href="#programme" class="conf-tab">Agenda</a>
          <a href="#partners" class="conf-tab">Sponsors &amp; Partners</a>
        </div>
      </nav>

      <!-- ============================================================ -->
      <!-- WHY ·Folio 01                                               -->
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
                Pharmacists are expected to adapt quickly, perform confidently, and contribute safely, while navigating cultural differences, system complexity, and professional uncertainty. Employers want workforce-ready pharmacists, educators want effective progression pathways, and policymakers want sustainable solutions, but these conversations rarely happen together, in the same room.
              </p>
              <p>
                This conference creates space for <strong>honest dialogue</strong>, <strong>shared understanding</strong>, and <strong>practical collaboration</strong>, moving beyond surface-level discussions toward solutions that can be tested, refined, and scaled.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- 3. WHO ·Folio 02                                            -->
      <!-- ============================================================ -->
      <section class="who" id="who">
        <div class="container">
          <div class="section-head">
            <span class="num">02 / Audience</span>
            <div>
              <h2 class="display">Who this conference is <em>for.</em></h2>
              <p class="sub">If you care about building a safe, confident and well-supported pharmacy workforce, this conference is for you.</p>
            </div>
          </div>
          <div class="who-grid">
            <article v-for="(c, i) in whoCards" :key="i" class="who-card">
              <div class="num">{{ c.num }}</div>
              <h3>{{ c.title }}</h3>
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
      <!-- PROGRAMME · Folio 03                                         -->
      <!-- ============================================================ -->
      <section class="programme" id="programme">
        <div class="container">
          <div class="section-head">
            <span class="num">03 / Agenda</span>
            <div>
              <h2 class="display">The journey of <em>the day.</em></h2>
              <p class="sub">A full day of conversations, panels, breakouts and reflection. From framing the reality in the morning to surfacing the pathway in the afternoon.</p>
            </div>
          </div>
          <ol class="programme-list">
            <li v-for="(slot, i) in programmeSlots" :key="i" class="programme-slot">
              <div class="time">{{ slot.time }}</div>
              <div class="content">
                <h3 class="title">{{ slot.title }}</h3>
                <div v-if="slot.subtitle" class="subtitle">{{ slot.subtitle }}</div>
                <div v-if="slot.speaker" class="speaker"><span class="label">Speaker</span><span>{{ slot.speaker }}</span></div>
                <div v-if="slot.panelists" class="panel">
                  <span class="label">Panel</span>
                  <ul>
                    <li v-for="(p, j) in slot.panelists" :key="j">{{ p }}</li>
                  </ul>
                  <div v-if="slot.moderator" class="moderator"><span class="label">Moderator</span><span>{{ slot.moderator }}</span></div>
                </div>
                <p v-if="slot.description" class="description">{{ slot.description }}</p>
                <ul v-if="slot.outputs" class="outputs">
                  <li v-for="(o, k) in slot.outputs" :key="k">{{ o }}</li>
                </ul>
                <p v-if="slot.note" class="note">{{ slot.note }}</p>
              </div>
            </li>
          </ol>
          <div class="who-cta">
            <a
              href="https://www.eventbrite.co.uk/e/pharmacist-evolve-the-catalyst-conference-2026-tickets-1983275923676?aff=oddtdtcreator"
              target="_blank"
              class="btn btn-primary"
            >
              Get a delegate pass &rarr;
            </a>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- 6. PATHWAY ·Folio 05 (dark navy)                            -->
      <!-- ============================================================ -->
      <section class="pathway" id="pathway">
        <div class="container">
          <div class="section-head">
            <span class="num">04 / Centrepiece</span>
            <div>
              <h2 class="display">From insight to <em>action.</em></h2>
              <p class="sub">A central feature of the Catalyst Conference is the introduction of the Overseas Pharmacist Workforce Integration Pathway, bringing together insights from lived experience, employer needs, education frameworks, and workforce priorities.</p>
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
      <!-- 7. SPEAKERS ·Folio 06                                       -->
      <!-- ============================================================ -->
      <section class="speakers" id="speakers">
        <div class="container">
          <div class="section-head">
            <span class="num">05 / Voices</span>
            <div>
              <h2 class="display">Speakers &amp; <em>contributors.</em></h2>
              <p class="sub">Speakers and contributors include voices from across the pharmacy sector.</p>
            </div>
          </div>
          <div class="speakers-grid">
            <article v-for="(s, i) in speakers" :key="i" class="speaker-card" :class="{ expanded: expandedBios[i] }">
              <div class="photo">
                <img :src="s.photo" :alt="s.name" loading="lazy" />
                <span class="tag">{{ s.tag }}</span>
              </div>
              <h4>{{ s.name }}</h4>
              <div class="role">{{ s.role }}</div>
              <div class="topic">{{ s.summary }}</div>
              <button v-if="s.bio" type="button" class="bio-toggle" @click="toggleBio(i)" :aria-expanded="!!expandedBios[i]">
                {{ expandedBios[i] ? 'Hide bio' : 'Read full bio' }}
                <span aria-hidden="true">{{ expandedBios[i] ? '−' : '+' }}</span>
              </button>
              <p v-if="expandedBios[i]" class="bio">{{ s.bio }}</p>
            </article>
          </div>
          <div class="speakers-note">
            <span class="pulse"></span>
            <span>
              Interested in contributing or participating in the conversation?
              <a href="mailto:faithadebimpe@pharmacistevolve.com">Get in touch &rarr;</a>
            </span>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- PARTNERS                                                     -->
      <!-- ============================================================ -->
      <section class="partners" id="partners">
        <div class="container">
          <div class="section-head">
            <span class="num">06 / Collaborate</span>
            <div>
              <h2 class="display">Partners &amp; <em>sponsors.</em></h2>
              <p class="sub">The partners and sponsors of the Catalyst Conference are more than event supporters; they are contributors to meaningful workforce conversations and solutions.</p>
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
      <!-- 9. PRACTICAL ·Folio 08                                      -->
      <!-- ============================================================ -->
      <section class="practical" id="practical">
        <div class="container">
          <div class="section-head">
            <span class="num">07 / Details</span>
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
              Pharmacist Evolve is a platform dedicated to supporting overseas-trained pharmacists to integrate, progress and thrive within the UK workforce. Through coaching, community, advocacy and strategic collaboration, Pharmacist Evolve works to turn complexity into clarity, supporting both individual pharmacists and the wider systems they work within.
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
import { reactive } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

const expandedBios = reactive({})
const toggleBio = (i) => { expandedBios[i] = !expandedBios[i] }

const whoCards = [
  { num: '01', title: 'Overseas-trained & early career pharmacists' },
  { num: '02', title: 'Employers & pharmacy leaders' },
  { num: '03', title: 'Educators, regulators & industry partners' },
]

const programmeSlots = [
  { time: '09:00–10:00', title: 'Arrival, registration & table orientation' },
  { time: '10:00–10:15', title: 'Welcome & framing the day', speaker: 'Faith Adebimpe, Founder, Pharmacist Evolve' },
  { time: '10:20–10:40', title: 'GPhC representation' },
  {
    time: '10:40–11:20',
    title: 'Panel 1: What are we actually asking overseas pharmacists to do?',
    subtitle: 'Lived experience meets the system.',
    panelists: [
      'Bisola Sonoiki, Clinical Portfolio Pharmacist, SW IPP Co-Chair',
      'Ahmed Abdeldayem, Rotational Hospital Pharmacist (OSPAP)',
      'Sobha Sharma Kandel, Pharmacy Director',
      'Gift Chukwuma, Community Pharmacist (OSPAP)',
    ],
    moderator: 'Faith Adebimpe',
  },
  { time: '11:20–11:35', title: 'Break', note: 'Interested overseas pharmacists move to the CPPE breakout session.' },
  {
    time: '11:35–12:10',
    title: 'Table breakouts: diagnosing the problem',
    description: 'Each table is assigned a lens. Describe the problem as it exists, no solutions.',
    outputs: ['Symptoms', 'Root causes', 'Who is most impacted'],
  },
  { time: '12:10–13:10', title: 'Lunch & networking · Exhibition' },
  {
    time: '13:15–13:35',
    title: 'Keynote 2: Workforce risk & system impact',
    subtitle: 'Integration as a safety, retention, and system issue.',
    speaker: 'Trevor Gore, Founder, Maestro Consulting; Advisory Council, Institute for Collaborative Working',
  },
  {
    time: '13:40–14:20',
    title: 'Panel 2: If we accept the problem, what must change?',
    panelists: [
      'Tase Oputu, President, Royal College of Pharmacy',
      'Jawn Jiang, Director, GM Graham Pharmacies; Pharmacist Independent Prescriber',
      'Nirusha Govender, Strategic Pharmacy & Health Systems Leader, FRCPharm',
      'Nicola Stockmann, Pharmacy Operations Manager, Past-President, APTUK',
    ],
    moderator: 'Angela Chiweshe',
    note: 'Final 5–7 minutes, table task: "If nothing changes, what happens in 5 years?"',
  },
  { time: '14:30–14:45', title: 'Break' },
  {
    time: '14:45–15:10',
    title: 'Pathway reveal: a provocation',
    speaker: 'Faith Adebimpe, Founder, Pharmacist Evolve',
    description: 'Introducing The Pharmacist Evolve Workforce Integration Pathway v0.1. Framed as a hypothesis, not a solution. An invitation to challenge.',
  },
  {
    time: '15:10–15:35',
    title: 'Table clinics: test the pathway',
    description: 'Each table is assigned a stage of the pathway.',
    outputs: ['Keep', 'Change', 'Risk', 'Opportunity'],
  },
  {
    time: '15:35–15:45',
    title: 'Collective reflection',
    description: 'Each table shares one hard truth and one condition for success. Faith synthesises.',
  },
  {
    time: '15:45–16:00',
    title: 'Final keynote: workforce ally perspective',
    speaker: 'Nicola Stockmann, Pharmacy Operations Manager, Past-President, APTUK',
  },
  {
    time: '16:00–16:10',
    title: 'Closing: what happens next',
    speaker: 'Faith Adebimpe, Founder, Pharmacist Evolve',
    description: 'What changed today. What happens next: pilots, advisory, report. An invitation to collaborate.',
  },
  { time: '16:10–17:00', title: 'Networking' },
]

const pathwayStages = [
  { num: '01', label: 'Pre-OSPAP', body: 'Preparation and readiness support.' },
  { num: '02', label: 'OSPAP & training', body: 'Structured training support.' },
  { num: '03', label: 'Post-registration', body: 'Integration and career progression.' },
]

const speakers = [
  {
    name: 'Trevor Gore',
    role: 'Honorary Member, Royal Pharmaceutical Society',
    summary: 'Behavioural science advocate focused on leadership, psychological safety and the development of internationally trained healthcare professionals.',
    bio: "Trevor Gore is an honorary member of the Royal Pharmaceutical Society, conference speaker and a behavioural economics advocate with a passion for leadership, psychological safety and the development of internationally trained healthcare professionals. He is also a member of FIP and has spoken at International Congresses on both self-care and collaboration. Trevor is passionate about helping organisations move beyond recruitment-focused thinking and towards a more strategic, system-level approach to workforce integration, retention and performance. For many years he trained pre-Reg pharmacists for most of the multiple retail chains on communication, teamwork and how reality often differs from expectation. He is especially interested in how confidence, belonging and psychological safety influence clinical decision-making, team effectiveness and patient safety. As a member of the behavioural science public health network, he is guided by the belief that many of the decisions made in healthcare are not always logical, and suffer from a number of cognitive biases. Through teaching, mentoring and speaking, Trevor aims to bridge the gap between education and practice and to support the development of resilient, sustainable pharmacy teams. He brings a practical and human perspective to workforce challenges, helping audiences connect individual experiences to wider organisational and system outcomes.",
    tag: 'Keynote',
    photo: '/images/speakers/trevor-gore.jpeg',
  },
  {
    name: 'Nicola Stockmann',
    role: 'Pharmacy Operations Manager, Hampshire Hospitals · Past-President, APTUK',
    summary: 'Past-President of APTUK; champions the development of the whole pharmacy workforce and the technician profession in integrated care.',
    bio: "Nicola Stockmann is a Pharmacy Operations Manager at Hampshire Hospitals Foundation Trust, and the immediate past-President of the Association of Pharmacy Technicians UK (2024–2025). A qualified Pharmacy Technician since 2012, she has experience across community pharmacy, clinical trials, medicines optimisation, and has previously served as a Medicines Safety Officer. Her other previous leadership roles include APTUK Vice-President (2022–2024) and Chair of the APTUK Hampshire Branch (2020–2022). She also served on the Inclusive Pharmacy Practice Board and held an Ex-Officio seat on the UK Pharmacy Professional Leadership Advisory Board. Additionally, she contributed to the development of the Department of Health and Social Care's 10-year health plan, supported work for the legislative amendments relating to Pharmacy Supervision and the Royal Pharmaceutical Society's Professional Standards for responding to patient safety incidents, and gave evidence to the Health and Social Care Committee's Pharmacy Inquiry in 2024. Nicola has represented the Pharmacy Technician profession internationally, showcasing the impact the profession makes and has potential to make in the UK. She is committed to advancing pharmacy within multidisciplinary care, championing the development of the whole pharmacy workforce, and has recently trained as a leadership coach and mentor.",
    tag: 'Keynote',
    photo: '/images/speakers/nicola-stockmann.jpg',
  },
  {
    name: 'Tase Oputu',
    role: 'President, Royal College of Pharmacy',
    summary: "Senior pharmacy and health-systems leader; Associate Director of Medicines Value & Performance at NHS Kent & Medway ICB. Champions pharmacy's role in population health, equity and high-value medicines systems.",
    bio: "Tase Oputu is President of the Royal College of Pharmacy and a senior pharmacy and health-systems leader with nearly 30 years' experience across hospital pharmacy, integrated care boards and national advocacy. She is Associate Director of Medicines Value & Performance at NHS Kent & Medway ICB, leading high-cost medicines strategy and system optimisation. A Fellow of the Royal Pharmaceutical Society and former NHS Assembly member, she champions pharmacy's role in population health, equity and innovation. Her work spans formulary reform, clinical pathways and governance, with a strong commitment to research, evidence-based policy and sustainable, high-value medicines systems.",
    tag: 'Panel',
    photo: '/images/speakers/tase-oputu.png',
  },
  {
    name: 'Nirusha Govender',
    role: 'Strategic Pharmacy & Health Systems Leader, FRCPharm',
    summary: '25+ years across UK clinical care, public health and workforce transformation. An OSPAP success story; leadership coach and STEM ambassador.',
    bio: 'Nirusha Govender is a Strategic Pharmacy & Health Systems Leader and Fellow of the Royal College of Pharmacy (FRCPharm), with over 25 years of experience across the UK healthcare system spanning clinical care, public health, workforce transformation, quality improvement, and system leadership. Originally from South Africa and an OSPAP success story, Nirusha has built a distinguished career in the UK, bringing a global perspective, resilience and a deep commitment to advancing pharmacy practice and integrated care. An award-winning senior healthcare leader, Nirusha is nationally recognised for pioneering innovative medicines optimisation models that improve outcomes, reduce inequalities, and place patient safety at the centre of care. A published author and respected international speaker, she regularly contributes thought leadership on global healthcare strategy, governance, workforce development, equity, and person-centred care. Passionate about developing others, Nirusha is also a professional leadership coach, mentor, and STEM ambassador, dedicated to supporting emerging and under-represented leaders to thrive. Known for leading with compassion and purpose, she champions inclusive, high-performing health systems that deliver lasting impact for patients, communities and the workforce.',
    tag: 'Panel',
    photo: '/images/speakers/nirusha-govender.jpeg',
  },
  {
    name: 'Jawn Jiang',
    role: 'Director, GM Graham Pharmacies · Independent Prescriber',
    summary: 'Director of a growing UK pharmacy network; mentors OSPAP candidates and overseas pharmacists. Focused on structured training and community pharmacy clinical services.',
    bio: 'Jawn is a Registered Pharmacist and Independent Prescriber, currently serving as Director of GM Graham Pharmacies, where he oversees a growing network of pharmacies across the UK, focused on delivering high-quality, patient-centred care and expanding innovative clinical services. A key area of his work is workforce development and education. He has supported and mentored pharmacy students and OSPAP candidates for many years, helping overseas pharmacists successfully integrate into UK practice. Through this, he has developed a strong passion for creating structured training environments and supporting the next generation of pharmacists to progress confidently in their careers. He is particularly interested in advancing the role of community pharmacy, enabling pharmacists to take on more clinical and leadership responsibilities, and developing new service models that improve patient access to care. His approach is practical and forward-thinking, with a strong focus on building sustainable teams, developing future leaders, and driving meaningful change within the community pharmacy sector.',
    tag: 'Panel',
    photo: '/images/speakers/jawn-jiang.png',
  },
  {
    name: 'Sobha Sharma Kandel',
    role: 'Clinical Pharmacist · Founder, three London pharmacies · FRCPharm',
    summary: 'Founder of three London pharmacies, FRCPharm. Mentors overseas pharmacists into UK practice; co-leads the Nepali community health movement Swasthya Chiya.',
    bio: "Ms Sobha Sharma Kandel is a clinical pharmacist, educator, and entrepreneur dedicated to advancing patient-centred care. After graduating from the UCL School of Pharmacy, she completed her independent prescribing qualification and an MSc in Pharmacy Practice from King's College London. She is the Founder and Co-owner of three pharmacies in London and has developed a diverse and impactful portfolio career spanning community pharmacy, general practice, education, and entrepreneurship. Her work focuses on improving access to care, delivering high-quality clinical services, supporting underserved communities, and tackling health inequalities at a local level. Sobha's contributions have been widely recognised: in 2023, she was named among the Pharmaceutical Journal's Women to Watch, and in 2024 she was awarded Fellowship of the Royal College of Pharmacy, the profession's highest honour, acknowledging her leadership in pharmacy practice and service to the community. Alongside her professional roles, she is a PhD student at the Medway School of Pharmacy, University of Kent. She is passionate about education and workforce development, contributing to curriculum design for the independent prescribing course at BPP University as well as teaching and assessing pharmacy NVQ students at The Woolwich College. Through her roles as a superintendent pharmacist and educator, she mentors and supports overseas pharmacists wanting to enter UK practice. In her spare time, Sobha co-leads Swasthya Chiya (health over a cup of tea), a community health movement aiming to create a culturally focused space where the Nepali community in the UK can learn about important health issues in their own language.",
    tag: 'Panel',
    photo: '/images/speakers/sobha-sharma-kandel.jpeg',
  },
  {
    name: 'Bisola Sonoiki',
    role: 'Clinical Portfolio Pharmacist · SW IPP Co-Chair',
    summary: 'Prescribing pharmacist working across community, PCN, hospital and ICB. Co-chair of the South West Inclusive Pharmacy Practice network.',
    bio: 'Bisola is an experienced prescribing pharmacist with a portfolio career spanning community pharmacy, primary care networks (PCNs), hospital practice, and system-level work with an Integrated Care Board (ICB). Through these roles, she works across healthcare settings to support safe and effective prescribing, medicines optimisation, and improved access to clinical pharmacy services. Alongside frontline clinical practice, Bisola contributes to system-wide pharmacy development and collaboration across integrated care. She brings a unique cross-sector perspective on how pharmacists can strengthen links between community, primary, and secondary care to improve patient outcomes. Passionate about advancing the profession, Bisola regularly shares insights on prescribing practice, integrated care, and the evolving role of pharmacists within modern healthcare systems at conferences and public engagements. She co-chairs the South West Inclusive Pharmacy Practice network, supporting initiatives that promote inclusion, equity, and belonging across the pharmacy workforce.',
    tag: 'Panel',
    photo: '/images/speakers/bisola-sonoiki.png',
  },
  {
    name: 'Ahmed Abdeldayem',
    role: 'Rotational Clinical Pharmacist, University Hospital Southampton',
    summary: 'OSPAP graduate (with distinction) at Southampton; contributed to the national trainee pharmacist assessment strategy and a published prescribing safety checklist.',
    bio: 'Ahmed graduated from the Faculty of Pharmacy, Ain Shams University, Egypt, in 2007. He developed his early career at the National Guard Hospital in Al Madina Al Munawara, KSA, gaining experience in hospital pharmacy practice, quality improvement, accreditation, education and training, and leadership. Seeking further professional growth, Ahmed moved to the United Kingdom, where he completed the Overseas Pharmacists Assessment Programme (OSPAP) with distinction. He then undertook foundation training at University Hospital Southampton and now practises as a rotational clinical pharmacist across multiple specialities while actively engaging in audit work, governance, and workforce training initiatives. Ahmed is passionate about supporting newly qualified pharmacists. He contributed to drafting the national assessment strategy for trainee pharmacists and published a prescribing safety checklist to support safe prescribing. He strongly believes in the role of advanced pharmacy practice and pharmacist prescribing in delivering patient-centred care and supporting the long-term vision of the NHS.',
    tag: 'Panel',
    photo: '/images/speakers/ahmed-abdeldayem.jpeg',
  },
  {
    name: 'Gift Chukwuma',
    role: 'Clinical Pharmacist · Community & Digital Pharmacy',
    summary: 'Overseas-trained clinical pharmacist working across community and digital pharmacy. Brings a lived account of transitioning into UK practice while raising a family.',
    bio: "Gift Chukwuma is a GPhC-registered Clinical Pharmacist with experience across community and digital pharmacy settings in the UK. As an overseas-trained pharmacist, she has navigated the transition into UK practice while balancing significant personal and professional responsibilities, including becoming a mother during her training years. Her experience spans high-volume community pharmacy and large-scale digital pharmacy environments, where she has worked in fast-paced, accuracy-critical settings, clinically checking prescriptions and supporting safe patient care at scale. Through these roles, Gift has developed strong clinical judgement, attention to detail, and the ability to remain calm and effective under pressure. Gift's journey has not been without challenges. From adapting to a new healthcare system to navigating workplace dynamics and building confidence in unfamiliar environments, her experiences reflect many of the realities faced by overseas-trained pharmacists. These experiences have shaped her passion for creating more supportive, inclusive pathways for others entering the profession. Alongside her clinical work, Gift enjoys giving back by supporting pharmacy students through university panels, sharing honest insights from her journey. She is committed to continuous growth and is particularly interested in the future of digital healthcare and improving patient-centred care through innovation.",
    tag: 'Panel',
    photo: '/images/speakers/gift-chukwuma.jpg',
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
   Heritage palette ·cream + dark navy + orange
   Editorial typography ·Instrument Serif italic display
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
  --hero-bg: #ebe4d6;
  --hero-ink: #0c0f1a;
  --hero-mute: rgba(12, 15, 26, 0.62);
  --hero-line: rgba(12, 15, 26, 0.12);
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

/* anchor scroll-offset accounts for global nav + sticky conf-tabs */
.conference-page section[id],
.conference-page header[id] { scroll-margin-top: 130px; }

/* ===== TABS NAV (sticky) ===== */
.conf-tabs {
  position: sticky;
  top: 64px;
  z-index: 30;
  background: color-mix(in oklab, var(--bg), transparent 18%);
  -webkit-backdrop-filter: saturate(140%) blur(10px);
  backdrop-filter: saturate(140%) blur(10px);
  border-bottom: 1px solid var(--line);
}
.conf-tabs .container {
  display: flex;
  gap: 8px;
  padding-top: 12px;
  padding-bottom: 12px;
  overflow-x: auto;
  scrollbar-width: none;
}
.conf-tabs .container::-webkit-scrollbar { display: none; }
.conf-tab {
  font-family: var(--mono);
  font-size: 11px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--ink-mute);
  padding: 8px 14px;
  border-radius: 999px;
  border: 1px solid var(--line);
  white-space: nowrap;
  transition: color 0.2s, border-color 0.2s, background 0.2s;
}
.conf-tab:hover {
  color: var(--ink);
  border-color: var(--ink);
  background: var(--bg-2);
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
.who-card { min-height: 200px; justify-content: space-between; }
.who-card h3 {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  font-size: clamp(26px, 2.4vw, 34px);
  line-height: 1.05;
  margin: 0;
  letter-spacing: -0.02em;
  max-width: 14ch;
}
.who-cta {
  display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;
  margin-top: 56px;
}
@media (max-width: 880px) {
  .who-grid { grid-template-columns: 1fr; }
}

/* ===== PROGRAMME ===== */
.programme { background: var(--bg); }
.programme-list {
  list-style: none;
  padding: 0;
  margin: 0;
  border-top: 1px solid var(--line);
}
.programme-slot {
  display: grid;
  grid-template-columns: 140px 1fr;
  gap: clamp(20px, 3vw, 40px);
  padding: 28px 0;
  border-bottom: 1px solid var(--line);
}
.programme-slot .time {
  font-family: var(--mono);
  font-size: 14px;
  letter-spacing: 0.02em;
  color: var(--accent);
  font-weight: 500;
  padding-top: 6px;
  white-space: nowrap;
}
.programme-slot .content { display: flex; flex-direction: column; gap: 10px; min-width: 0; }
.programme-slot .title {
  font-family: var(--display-family);
  font-style: var(--display-style);
  font-weight: var(--display-weight);
  font-size: clamp(20px, 1.9vw, 26px);
  line-height: 1.2;
  letter-spacing: -0.01em;
  margin: 0;
  color: var(--ink);
}
.programme-slot .subtitle {
  font-size: 15px;
  color: var(--ink-mute);
  font-style: italic;
  line-height: 1.4;
}
.programme-slot .speaker,
.programme-slot .moderator {
  font-size: 14.5px;
  color: var(--ink);
  line-height: 1.5;
}
.programme-slot .label {
  display: inline-block;
  font-family: var(--mono);
  font-size: 10px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--accent);
  margin-right: 10px;
  vertical-align: 2px;
}
.programme-slot .panel { display: flex; flex-direction: column; gap: 6px; }
.programme-slot .panel ul {
  list-style: none;
  padding: 4px 0 0;
  margin: 0;
}
.programme-slot .panel ul li {
  position: relative;
  padding: 3px 0 3px 16px;
  color: var(--ink);
  font-size: 14px;
  line-height: 1.45;
}
.programme-slot .panel ul li::before {
  content: '';
  position: absolute;
  left: 0;
  top: 12px;
  width: 6px;
  height: 1px;
  background: var(--accent);
}
.programme-slot .moderator { margin-top: 4px; }
.programme-slot .description {
  font-size: 14.5px;
  color: var(--ink-mute);
  line-height: 1.55;
  margin: 0;
  max-width: 64ch;
}
.programme-slot .outputs {
  list-style: none;
  padding: 0;
  margin: 4px 0 0;
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}
.programme-slot .outputs li {
  font-family: var(--mono);
  font-size: 11px;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: 5px 11px;
  border: 1px solid var(--line);
  border-radius: 999px;
  color: var(--ink);
  background: var(--card);
}
.programme-slot .note {
  font-size: 13.5px;
  color: var(--ink-mute);
  font-style: italic;
  margin: 4px 0 0;
}
@media (max-width: 720px) {
  .programme-slot { grid-template-columns: 1fr; gap: 8px; padding: 24px 0; }
  .programme-slot .time { font-size: 13px; padding-top: 0; }
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
  align-items: start;
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
.speaker-card .topic { font-size: 14px; color: var(--ink-mute); line-height: 1.45; }
.speaker-card .bio-toggle {
  margin-top: 14px;
  align-self: flex-start;
  background: transparent;
  border: 1px solid var(--line-strong);
  color: var(--ink);
  font-family: var(--mono);
  font-size: 10px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  padding: 8px 14px;
  border-radius: 999px;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: border-color 0.2s, background 0.2s, color 0.2s;
}
.speaker-card .bio-toggle:hover {
  border-color: var(--accent);
  color: var(--accent);
  background: color-mix(in oklab, var(--accent), transparent 92%);
}
.speaker-card .bio-toggle span { font-size: 14px; line-height: 1; }
.speaker-card .bio {
  margin: 14px 0 0;
  padding-top: 14px;
  border-top: 1px solid var(--line);
  font-size: 13.5px;
  line-height: 1.6;
  color: var(--ink-mute);
}

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
