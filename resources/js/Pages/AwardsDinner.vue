<template>
  <AppLayout :hide-footer="true">
    <Head title="OSPAP Networking & Awards Dinner">
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=EB+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet" />
    </Head>

    <div class="inv" :class="{ 'reveal-on': revealReady }">
      <!-- ===================== THE INVITATION ===================== -->
      <header class="hero">
        <div class="hero-inner wrap">
          <div class="frame reveal">
            <p class="house">Pharmacist Evolve</p>
            <Flourish class="fl reveal" />
            <p class="invite reveal">Celebrating achievement, building connections and recognising the contribution of internationally trained pharmacists to UK pharmacy.</p>

            <h1 class="title reveal">
              <span class="t-line">OSPAP Networking</span>
              <span class="t-amp">&amp;</span>
              <span class="t-line t-line--lead">Awards Dinner</span>
            </h1>

            <HairRule class="reveal" />

            <ul class="particulars reveal">
              <li><span>Saturday, 30 January 2027</span></li>
              <li><span>Birmingham, UK</span></li>
              <li><span>5pm to 10pm</span></li>
              <li><span>Black Tie Formal</span></li>
              <li><span>Tickets £35&ndash;£70</span></li>
            </ul>

            <p class="lede reveal">
              Join OSPAP students, foundation trainees, registered pharmacists, employers and
              pharmacy leaders for an evening of networking and celebration.
            </p>

            <div class="actions reveal">
              <a :href="links.book" target="_blank" rel="noopener noreferrer" class="btn btn-solid">Book your place</a>
              <a :href="links.nominate" target="_blank" rel="noopener noreferrer" class="btn btn-line">Nominate for an award</a>
            </div>
          </div>
        </div>
      </header>

      <!-- ===================== THE EVENING ===================== -->
      <section class="band" aria-labelledby="s-evening">
        <div class="wrap">
          <SectionHead id="s-evening">The Evening</SectionHead>

          <p class="lead-para reveal">
            <span class="drop">T</span>he journey from overseas qualification to practising in the
            UK takes commitment, resilience and support. This evening brings our community together
            to celebrate that journey, recognise outstanding contributions and build connections
            across the profession.
          </p>

          <div class="journey reveal" aria-label="The OSPAP journey this evening honours">
            <template v-for="(stage, i) in journey" :key="stage">
              <span class="j-step">{{ stage }}</span>
              <span v-if="i < journey.length - 1" class="j-sep" aria-hidden="true"></span>
            </template>
          </div>

          <div class="two-col">
            <div class="col reveal">
              <h3 class="col-head">Who should attend?</h3>
              <ul class="elegant-list">
                <li v-for="item in attendees" :key="item">{{ item }}</li>
              </ul>
            </div>
            <div class="col reveal">
              <h3 class="col-head">What guests can expect</h3>
              <ul class="elegant-list">
                <li v-for="item in expectations" :key="item">{{ item }}</li>
              </ul>
              <p class="col-note">Ticket includes: meal, drinks, entertainment and all goodie bags and other benefits.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== THE HONOURS ===================== -->
      <section class="band band--dark" aria-labelledby="s-honours">
        <div class="wrap">
          <SectionHead id="s-honours" tone="light">The Honours</SectionHead>
          <p class="section-sub reveal">
            Recognising achievement across the OSPAP journey. These awards celebrate the
            achievements of the OSPAP community and the individuals and organisations supporting
            their development within UK pharmacy. Select any award for who is eligible, the judging
            criteria, whether self-nominations are accepted, what evidence is required and the
            nomination deadline.
          </p>

          <dl class="dates reveal">
            <div><dt>Achievement period</dt><dd>1 November 2025 &ndash; 31 October 2026</dd></div>
            <div><dt>Nomination deadline for all categories</dt><dd>15 November 2026 at 11:59 pm UK time</dd></div>
            <div><dt>To nominate</dt><dd>Free &middot; shortlisted nominees attend the dinner for free</dd></div>
          </dl>
          <p class="dates-note reveal">Work may have started earlier, but nominations must demonstrate achievements or impact during this period.</p>

          <ol class="honours">
            <li v-for="(award, i) in awards" :id="award.id" :key="award.id" class="honour reveal">
              <details>
                <summary>
                  <span class="h-num">{{ roman[i] }}</span>
                  <span class="h-body">
                    <span class="h-name">{{ award.name }}</span>
                    <span class="h-focus">{{ award.focus }}</span>
                  </span>
                  <span class="h-mark" aria-hidden="true"></span>
                </summary>
                <div class="h-detail">
                  <div class="h-field">
                    <span class="f-label">Who is eligible</span>
                    <p>{{ award.eligible }}</p>
                  </div>
                  <div class="h-field">
                    <span class="f-label">Judging criteria</span>
                    <ul>
                      <li v-for="c in award.criteria" :key="c">{{ c }}</li>
                    </ul>
                  </div>
                  <div class="h-field-row">
                    <div class="h-field">
                      <span class="f-label">Self-nominations</span>
                      <p>{{ award.selfNom }}</p>
                    </div>
                    <div class="h-field">
                      <span class="f-label">Nominations close</span>
                      <p>{{ award.deadline }}</p>
                    </div>
                  </div>
                  <div class="h-field">
                    <span class="f-label">Evidence required</span>
                    <p>{{ award.evidence }}</p>
                  </div>
                </div>
              </details>
            </li>
          </ol>

          <div class="guidance reveal">
            <h3 class="g-head">A word on nominations</h3>
            <ul>
              <li v-for="g in guidance" :key="g">{{ g }}</li>
            </ul>
          </div>

          <div class="cta-row reveal">
            <a :href="links.nominate" target="_blank" rel="noopener noreferrer" class="btn btn-solid">Nominate yourself or someone else</a>
          </div>
        </div>
      </section>

      <!-- ===================== ADMISSION ===================== -->
      <section class="band" aria-labelledby="s-admission">
        <div class="wrap">
          <SectionHead id="s-admission">Admission</SectionHead>
          <p class="section-sub reveal">Each available ticket type and its full price. Booking is on Eventbrite.</p>

          <div class="prices reveal">
            <div v-for="t in tickets" :key="t.name" class="price" :class="{ 'price--marked': t.featured }">
              <span v-if="t.featured" class="price-flag">Early booking</span>
              <span class="price-name">{{ t.name }}</span>
              <span class="price-fig">{{ t.price }}</span>
              <span class="price-note">{{ t.note }}</span>
            </div>
          </div>

          <div class="cta-row reveal">
            <a :href="links.book" target="_blank" rel="noopener noreferrer" class="btn btn-solid">Book your place</a>
          </div>
        </div>
      </section>

      <!-- ===================== PATRONAGE ===================== -->
      <section class="band band--tint patronage" aria-labelledby="s-patronage">
        <div class="wrap reveal">
          <SectionHead id="s-patronage" center>Patronage</SectionHead>
          <p class="section-sub center">
            Interested in supporting the evening? Explore sponsorship, award sponsorship and
            opportunities to introduce your organisation to our community.
          </p>
          <div class="cta-row">
            <a :href="links.sponsor" class="btn btn-line">Enquire about sponsorship</a>
          </div>
        </div>
      </section>

      <!-- ===================== THE VENUE ===================== -->
      <section class="band" aria-labelledby="s-venue">
        <div class="wrap">
          <SectionHead id="s-venue">The Venue</SectionHead>

          <div class="venue">
            <div class="venue-plate reveal">
              <h3 class="v-name">Hyatt Regency Birmingham</h3>
              <address class="v-addr">2 Bridge Street<br />Birmingham, B1 2JZ<br />United Kingdom</address>
              <a :href="links.map" target="_blank" rel="noopener noreferrer" class="v-map">View venue on Google Maps</a>
              <p class="v-suite">The dinner is planned for the <em>Sonata Suite</em>, accessed through the hotel lobby.</p>
            </div>
            <div class="venue-notes">
              <div class="vn reveal">
                <h4>Travelling by train</h4>
                <p>Birmingham New Street is the recommended arrival station, approximately 10 minutes&rsquo; walk from the hotel. Birmingham Snow Hill and Birmingham Moor Street are also city-centre alternatives. Taxis are available for the onward journey.</p>
              </div>
              <div class="vn reveal">
                <h4>Parking</h4>
                <p>Limited parking is available at the hotel. We will confirm availability, and booking arrangements nearer to the date. Nearby paid alternatives include Q-Park Mailbox and Q-Park Brindleyplace. Parking charges are not included in your event ticket.</p>
              </div>
              <div class="vn reveal">
                <h4>Accessibility</h4>
                <p>Guests requiring step-free access, accessible toilet facilities, suitable seating or assistance on arrival should contact the hotel before travelling so the appropriate arrangements can be confirmed. Accessible bedrooms are available, subject to availability. Please discuss your specific requirements directly with the hotel and obtain written confirmation when booking. Please call Hyatt Regency Birmingham on <a href="tel:+441216431234">0121&nbsp;643&nbsp;1234</a> and mention the Pharmacist Evolve Networking and Awards Dinner on 30 January 2027. Please also tell the Pharmacist Evolve team about any arrangements needed during the dinner when booking your ticket.</p>
              </div>
              <div class="vn reveal">
                <h4>Staying overnight</h4>
                <p>Guests can book accommodation at Hyatt Regency Birmingham, allowing them to stay at the event venue. A dedicated event booking rate has not yet been confirmed. Any agreed rate and booking instructions will be shared here once available. Accommodation is booked and paid for separately from dinner tickets. Other nearby options include Premier Inn Birmingham City Centre Bridge Street (20 Bridge Street, Birmingham, B1 2JR) and Hilton Garden Inn Birmingham Brindleyplace (1 Brunswick Square, Birmingham, B1 2HW). Please check rates, availability and cancellation terms directly with your chosen hotel.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== ENQUIRIES ===================== -->
      <section class="band band--tint" aria-labelledby="s-faq">
        <div class="wrap narrow">
          <SectionHead id="s-faq" center>Enquiries Answered</SectionHead>
          <div class="faqs">
            <details v-for="(faq, i) in faqs" :key="i" class="faq reveal">
              <summary>
                <span>{{ faq.q }}</span>
                <span class="faq-mark" aria-hidden="true"></span>
              </summary>
              <p>{{ faq.a }}</p>
            </details>
          </div>
        </div>
      </section>

      <!-- ===================== THE CLOSE ===================== -->
      <footer class="close">
        <div class="wrap close-inner reveal">
          <Flourish class="fl" tone="light" />
          <p class="close-sum">We look forward to your company</p>
          <p class="close-when">Saturday, 30 January 2027 &middot; 5pm to 10pm</p>
          <p class="close-where">Hyatt Regency Birmingham &middot; Black Tie Formal</p>
          <div class="cta-row">
            <a :href="links.book" target="_blank" rel="noopener noreferrer" class="btn btn-solid">Book your place</a>
          </div>
          <p class="imprint">
            Enquiries to
            <a href="mailto:gloria.nd@pharmacistevolve.com">Gloria</a>
            &amp;
            <a href="mailto:faithadebimpe@pharmacistevolve.com">Faith</a>
          </p>
          <nav class="colophon" aria-label="Site">
            <Link href="/">Home</Link><span aria-hidden="true">&middot;</span>
            <Link href="/events">Events</Link><span aria-hidden="true">&middot;</span>
            <Link href="/privacy">Privacy</Link><span aria-hidden="true">&middot;</span>
            <Link href="/terms">Terms</Link><span aria-hidden="true">&middot;</span>
            <Link href="/cookies">Cookies</Link><span aria-hidden="true">&middot;</span>
            <button type="button" @click="showCookieSettings">Cookie settings</button>
          </nav>
          <p class="copyline">&copy; {{ year }} Pharmacist Evolve</p>
        </div>
      </footer>
    </div>
  </AppLayout>
</template>

<script setup>
import { ref, computed, onMounted, onBeforeUnmount, h } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

defineOptions({ layout: null })

const year = computed(() => new Date().getFullYear())
const showCookieSettings = () => {
  if (typeof window !== 'undefined') {
    window.dispatchEvent(new CustomEvent('show-cookie-preferences'))
  }
}

/* elegant drawn ornaments (no emoji / unicode icons) */
const Flourish = (props) =>
  h('svg', { viewBox: '0 0 140 12', class: `flourish flourish-${props.tone || 'dark'}`, 'aria-hidden': 'true' }, [
    h('path', { d: 'M4 6 H56', fill: 'none', stroke: 'currentColor', 'stroke-width': '1' }),
    h('path', { d: 'M70 1 L75 6 L70 11 L65 6 Z', fill: 'none', stroke: 'currentColor', 'stroke-width': '1' }),
    h('circle', { cx: '70', cy: '6', r: '1.4', fill: 'currentColor' }),
    h('path', { d: 'M84 6 H136', fill: 'none', stroke: 'currentColor', 'stroke-width': '1' }),
  ])
Flourish.props = ['tone']

const HairRule = () =>
  h('div', { class: 'hairrule', 'aria-hidden': 'true' }, [h('span')])

const SectionHead = (props, { slots }) =>
  h('div', { class: `sechead sechead-${props.tone || 'dark'} ${props.center ? 'sechead--center' : ''} reveal` }, [
    h('span', { class: 'sechead-rule sechead-rule--l' }),
    h('h2', { class: 'sechead-title', id: props.id }, slots.default ? slots.default() : []),
    h('span', { class: 'sechead-rule sechead-rule--r' }),
  ])
SectionHead.props = ['id', 'tone', 'center']

const roman = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII']

const links = {
  book: 'https://www.eventbrite.co.uk/e/ospap-pharmacists-networking-awards-dinner-by-pharmacistevolve-tickets-1995464109869?aff=oddtdtcreator',
  nominate: 'https://docs.google.com/forms/d/e/1FAIpQLSd0MYrpChE2W-YSwi_XphZd_1mf0syFCPciyKrFtarN3nLixA/viewform',
  sponsor: 'mailto:faithadebimpe@pharmacistevolve.com?subject=Sponsorship enquiry - OSPAP Networking & Awards Dinner',
  map: 'https://www.google.com/maps/search/?api=1&query=Hyatt%20Regency%20Birmingham%202%20Bridge%20Street%20B1%202JZ',
}

const journey = ['Overseas qualification', 'OSPAP', 'Foundation training', 'UK registration', 'Honoured']

const attendees = [
  'Current and prospective OSPAP students.',
  'Foundation trainee pharmacists.',
  'OSPAP graduates and registered pharmacists at every career stage.',
  'Pharmacy employers, educators, mentors and industry partners.',
  'Friends, family and supporters.',
]

const expectations = [
  'A welcome reception and time to meet other guests.',
  'A seated dinner.',
  'Contributions from invited speakers or special guests.',
  'The awards ceremony.',
  'Further networking and entertainment.',
]

const awards = [
  {
    id: 'award-pharmacist',
    name: 'OSPAP Pharmacist of the Year Award',
    focus: 'Outstanding overall contribution to pharmacy practice, patient care and the profession.',
    eligible: 'GPhC-registered pharmacists who qualified through the OSPAP route and practised in the UK during the achievement period.',
    criteria: [
      'Excellence in professional practice and patient care.',
      'Meaningful contributions to their team, organisation or the wider profession.',
      'Initiative, professionalism and commitment to continued development.',
      'Positive impact as a role model for the OSPAP community.',
    ],
    selfNom: 'Accepted. Nominations by colleagues, managers, mentors or others familiar with the nominee’s work are also welcome.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide one professional testimonial and up to three supporting items demonstrating impact, such as feedback, project outcomes, service improvements or professional recognition.',
    deadline: '15 November 2026.',
  },
  {
    id: 'award-leader',
    name: 'Emerging Leader Award',
    focus: 'Initiative, positive influence and leadership potential.',
    eligible: 'OSPAP students, foundation trainees and OSPAP-qualified pharmacists within their first five years of GPhC registration who demonstrated leadership during the achievement period. A formal leadership title is not required.',
    criteria: [
      'Taking initiative to address a challenge or create an opportunity.',
      'Inspiring, supporting or developing others.',
      'Bringing people together and translating ideas into action.',
      'Evidence of positive impact and potential for further leadership.',
    ],
    selfNom: 'Accepted, alongside nominations from others familiar with the nominee’s contribution.',
    evidence: 'A supporting statement of up to 500 words describing a specific leadership example. Shortlisted nominees will be asked to provide one testimonial and up to three supporting items showing the nominee’s contribution and results.',
    deadline: '15 November 2026.',
  },
  {
    id: 'award-community',
    name: 'Community Impact Award',
    focus: 'Meaningful contributions to improving the journey of incoming OSPAP pharmacists.',
    eligible: 'Individuals or teams led by, or including, an OSPAP student, foundation trainee or OSPAP-qualified pharmacist who made a meaningful contribution to a UK community during the achievement period. Contributions may be paid or voluntary.',
    criteria: [
      'Responding to an identifiable community need.',
      'Improving health awareness, access to support, inclusion or wellbeing.',
      'Meaningful engagement with the community served.',
      'Evidence of benefit and potential for lasting impact.',
    ],
    selfNom: 'Accepted, including submissions by a team representative.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide feedback from a community member or partner organisation, and up to three supporting items such as participation figures, outcomes, campaign materials or feedback summaries.',
    deadline: '15 November 2026.',
  },
  {
    id: 'award-employer',
    name: 'OSPAP Employer of the Year Award',
    focus: 'An employer demonstrating strong support, development and inclusion of OSPAP pharmacists or trainees.',
    eligible: 'UK pharmacy employers or individual workplaces that employed or hosted OSPAP students, foundation trainees or OSPAP-qualified pharmacists during the achievement period. Employers of any size and across all pharmacy sectors may enter.',
    criteria: [
      'Structured induction and support for transition into UK practice.',
      'Accessible supervision, mentorship and professional development.',
      'Fair, inclusive working practices and a supportive workplace culture.',
      'Evidence of employee or trainee progression, wellbeing and positive experience.',
    ],
    selfNom: 'Accepted from employers. Employees, trainees and other professionals may also nominate an employer.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide at least one testimonial from an OSPAP-route employee or trainee, and up to three supporting items such as induction plans, development programmes, anonymised feedback or progression outcomes. Employer-submitted entries must include employee or trainee evidence.',
    deadline: '15 November 2026.',
  },
  {
    id: 'award-entrepreneur',
    name: 'OSPAP Entrepreneur of the Year Award',
    focus: 'Enterprise and innovation through a pharmacy or healthcare business or initiative.',
    eligible: 'OSPAP students, foundation trainees or OSPAP-qualified pharmacists who founded or co-founded an active business or social enterprise, in any sector, demonstrating progress during the achievement period. An idea alone is not sufficient.',
    criteria: [
      'A clear understanding of the problem or customer need being addressed.',
      'Initiative, creativity and effective execution.',
      'Demonstrable business progress or social impact.',
      'A credible approach to sustainability and responsible business practice.',
    ],
    selfNom: 'Accepted, alongside nominations from clients, colleagues, partners or others familiar with the business.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide confirmation of the nominee’s founder or co-founder role, and up to three supporting items showing progress, for example customer feedback, trading activity, partnerships, user growth or social outcomes. Confidential financial information is not mandatory.',
    deadline: '15 November 2026.',
  },
  {
    id: 'award-trainee',
    name: 'OSPAP Foundation Trainee of the Year Award',
    focus: 'Outstanding development, professionalism and contribution during foundation training.',
    eligible: 'Individuals who completed OSPAP and undertook UK foundation pharmacist training at any point during the achievement period, including those who have since registered as pharmacists.',
    criteria: [
      'Commitment to learning and applying knowledge in practice.',
      'Professionalism, teamwork and patient-centred care.',
      'Initiative and constructive use of feedback.',
      'Positive contributions to their training environment or patient services.',
    ],
    selfNom: 'Accepted. Nominations from supervisors, colleagues and mentors are also welcome.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide one testimonial from a designated supervisor or another professional who directly observed the nominee’s work, and up to three supporting items such as feedback, reflective examples or improvement projects.',
    deadline: '15 November 2026.',
  },
  {
    id: 'award-student',
    name: 'OSPAP Student of the Year Award',
    focus: 'Achievement, initiative and contribution during the OSPAP course.',
    eligible: 'Individuals enrolled on a GPhC-accredited OSPAP programme at any point during the achievement period, including those who have since completed the programme or entered foundation training.',
    criteria: [
      'Commitment to learning and professional development.',
      'Applying learning and responding constructively to feedback.',
      'Supporting peers and contributing to university or student life.',
      'Initiative, professionalism and readiness for the next stage of UK practice.',
    ],
    selfNom: 'Accepted. Nominations from lecturers, tutors, peers or mentors are also welcome.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide one testimonial from a lecturer, tutor or placement supervisor, and up to three supporting items demonstrating achievement or contribution. Academic grades may support an entry but are not compulsory.',
    deadline: '15 November 2026.',
  },
  {
    id: 'award-educator',
    name: 'OSPAP Educator and Mentor of the Year Award',
    focus: 'Recognising an individual who has made an outstanding contribution to the development of OSPAP students, foundation trainees or OSPAP-qualified pharmacists through teaching, supervision or mentorship.',
    eligible: 'Lecturers, teacher practitioners, foundation supervisors, practice educators, coaches and formal or informal mentors who supported OSPAP students, foundation trainees or OSPAP-qualified pharmacists during the achievement period. Nominees do not need to have qualified through OSPAP themselves.',
    criteria: [
      'Teaching, supervision or mentorship responsive to learners’ needs.',
      'Understanding and addressing challenges associated with entering UK practice.',
      'Creating an inclusive environment that builds confidence and professional capability.',
      'Evidence of positive effects on learners’ development, progression or practice.',
    ],
    selfNom: 'Accepted. Nominations from students, trainees, mentees and colleagues are particularly encouraged.',
    evidence: 'A supporting statement of up to 500 words. Shortlisted nominees will be asked to provide at least one testimonial from someone directly taught, supervised or mentored by the nominee, and up to three supporting items such as learner feedback, teaching resources or development outcomes.',
    deadline: '15 November 2026.',
  },
]

const guidance = [
  'Explain what the nominee personally contributed and what changed as a result. Specific examples carry more weight than general praise.',
  'Obtain the nominee’s consent before submitting their nomination, and permission to share any testimonials.',
  'Remove patient-identifiable information and confidential information from all evidence.',
  'Previous achievements may provide context, but judging will focus on the stated achievement period.',
  'Individuals may enter more than one category where eligible, but each submission must address that category’s criteria.',
  'Entries will be assessed on the quality and impact of the contribution, taking account of the nominee’s career stage and available resources.',
]

const tickets = [
  { name: 'Student or foundation trainee', price: '£35', note: 'A student ID or proof of trainee registration will be required on the day.', featured: false },
  { name: 'Early booking rate', price: '£50', note: 'Closes 15 November 2026.', featured: true },
  { name: 'Individual ticket', price: '£70', note: '', featured: false },
]

const faqs = [
  { q: 'Can I attend if I am not nominated for an award?', a: 'Absolutely! You do not need to be an award nominee to attend. Purchase your ticket using one of the links above and join us for an evening of celebration and connection.' },
  { q: 'Can I come alone?', a: 'Yes! Whether you come alone or with others, there will be opportunities to meet fellow guests, make connections and grow your network.' },
  { q: 'Can I bring a partner, friend or family member?', a: 'Yes, partners, friends and family members are welcome to celebrate with us. Each guest will need their own ticket.' },
  { q: 'Is the event open to pharmacists who did not take the OSPAP route?', a: 'Yes! Pharmacists from all training backgrounds are welcome to join us in celebrating the OSPAP community.' },
  { q: 'What is the dress code?', a: 'Black tie or formal evening wear. Dress for a special evening of celebration!' },
  { q: 'Can you accommodate dietary requirements?', a: 'Yes. Please let us know about any dietary requirements or food allergies at least two weeks before the event so we can discuss suitable arrangements with the venue.' },
  { q: 'Can I request to sit with someone?', a: 'Seating is available on a first-come, first-served basis. We recommend arriving together if you would like to sit with someone, although we cannot guarantee seats together.' },
  { q: 'Can I transfer my ticket or receive a refund?', a: 'Please contact the Pharmacist Evolve team to discuss ticket transfers or refund requests.' },
  { q: 'Will photographs and videos be taken?', a: 'Yes, official photography and filming will take place during the evening. Please speak to the event team on arrival if you would prefer not to be photographed or filmed.' },
  { q: 'I booked for the original October date. Is my ticket still valid?', a: 'Yes! Your original ticket remains valid for the rescheduled dinner on 30 January 2027. You do not need to purchase another ticket.' },
]

/* a single, slow, orchestrated reveal — from a fully-visible default */
const revealReady = ref(false)
let observer = null
onMounted(() => {
  const reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches
  if (reduce || typeof IntersectionObserver === 'undefined') return
  revealReady.value = true
  observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((e) => {
        if (e.isIntersecting) {
          e.target.classList.add('seen')
          observer.unobserve(e.target)
        }
      })
    },
    { rootMargin: '0px 0px -8% 0px', threshold: 0.06 }
  )
  document.querySelectorAll('.inv .reveal').forEach((el) => observer.observe(el))
  window.setTimeout(() => {
    document.querySelectorAll('.inv .reveal:not(.seen)').forEach((el) => el.classList.add('seen'))
  }, 2800)
})
onBeforeUnmount(() => observer && observer.disconnect())
</script>

<style scoped>
/* ============================================================
   THE ENGRAVED INVITATION — refined gala elegance.
   Warm ivory + espresso ink + antique gold, with a restrained
   brand-orange accent. Cinzel (display) + EB Garamond (body).
   ============================================================ */
.inv {
  --ivory: #fcfbf8;
  --ivory-2: #f2eee6;
  --ink: #17120d;
  --ink-soft: #473d31;
  --espresso: #16273f;
  --espresso-2: #101d33;
  --gold: #a87c28;
  --gold-soft: #c6a556;
  --gold-bright: #ecd08a;
  --gilt-ink: #7a5718;
  --cream: #fbf7ef;
  --cream-soft: #ded4c3;
  --flare: #c2410c;
  --flare-bright: #ea580c;
  --flare-deep: #9a3412;
  --flare-tint: #fceee6;

  background: var(--ivory);
  color: var(--ink);
  font-family: 'EB Garamond', Georgia, serif;
  font-size: 1.08rem;
  overflow-x: hidden;
}

.wrap { max-width: 64rem; margin: 0 auto; padding: 0 1.5rem; }
.wrap.narrow { max-width: 44rem; }

/* ---- shared marks ---- */
.flourish { display: block; width: clamp(110px, 22vw, 150px); height: 12px; margin: 0 auto; }
.flourish-dark { color: var(--gold); }
.flourish-light { color: var(--gold-bright); }
.hairrule { display: flex; justify-content: center; margin: 1.5rem 0; }
.hairrule span { display: block; width: min(16rem, 60%); height: 1px; background: var(--gold); opacity: 0.85; transform-origin: center; }

/* =================== THE INVITATION =================== */
.hero { background: var(--ivory); padding: clamp(2.5rem, 6vw, 4.5rem) 0 clamp(2.5rem, 5vw, 4rem); }
.frame {
  position: relative; text-align: center;
  padding: clamp(2.5rem, 6vw, 4.25rem) clamp(1.5rem, 5vw, 3.5rem);
  box-shadow: inset 0 0 0 1.5px var(--gold), inset 0 0 0 4px var(--ivory), inset 0 0 0 5px var(--gold);
}
.house {
  font-family: 'Cinzel', serif; font-weight: 500; text-transform: uppercase;
  letter-spacing: 0.34em; font-size: clamp(0.72rem, 1.5vw, 0.86rem);
  color: var(--gilt-ink); margin: 0 0 1.4rem; padding-left: 0.34em;
}
.fl { margin-bottom: 1.5rem; }
.invite {
  font-style: italic; font-size: clamp(1rem, 2.1vw, 1.2rem); color: var(--ink-soft);
  max-width: 33rem; margin: 0 auto 1.6rem; line-height: 1.55;
}
.title { margin: 0; color: var(--ink); font-weight: 400; }
.title .t-line {
  display: block; font-family: 'Cinzel', serif; font-weight: 500;
  text-transform: uppercase; letter-spacing: 0.06em; line-height: 1.08;
  font-size: clamp(1.5rem, 4.4vw, 2.5rem);
}
.title .t-line--lead { font-size: clamp(2.4rem, 7vw, 4.25rem); font-weight: 600; letter-spacing: 0.03em; margin-top: 0.1em; }
.title .t-amp {
  display: block; font-family: 'EB Garamond', serif; font-style: italic; font-weight: 500;
  color: var(--flare); font-size: clamp(1.8rem, 4.5vw, 2.6rem); line-height: 1; margin: 0.12em 0;
}

.particulars {
  list-style: none; margin: 1.6rem auto 0; padding: 0; max-width: 40rem;
  display: flex; flex-wrap: wrap; justify-content: center; align-items: center;
  column-gap: 0; row-gap: 0.5rem;
}
.particulars li { display: flex; align-items: center; }
.particulars li span {
  font-family: 'Cinzel', serif; font-weight: 400; text-transform: uppercase;
  letter-spacing: 0.14em; font-size: clamp(0.64rem, 1.4vw, 0.74rem); color: var(--ink);
  padding: 0 1.1rem;
}
.particulars li + li::before {
  content: ''; width: 4px; height: 4px; background: var(--gold); transform: rotate(45deg); flex: none;
}
.lede {
  max-width: 36rem; margin: 1.8rem auto 0; line-height: 1.7;
  font-size: clamp(1.02rem, 2vw, 1.14rem); color: var(--ink-soft);
}
.actions { display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; margin-top: 2.2rem; }

/* ---- buttons ---- */
.btn {
  display: inline-flex; align-items: center; justify-content: center;
  font-family: 'Cinzel', serif; font-weight: 500; text-transform: uppercase;
  letter-spacing: 0.16em; font-size: 0.78rem; padding: 1rem 2rem; text-decoration: none;
  transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
}
.btn-solid { background: var(--flare); color: #fff; box-shadow: 0 14px 30px -16px rgba(194, 65, 12, 0.55); }
.btn-solid:hover { background: var(--flare-deep); color: #fff; transform: translateY(-1px); box-shadow: 0 16px 34px -16px rgba(154, 52, 18, 0.6); }
.btn-line { background: transparent; color: var(--flare-deep); box-shadow: inset 0 0 0 1.5px var(--flare); }
.btn-line:hover { color: var(--flare-deep); box-shadow: inset 0 0 0 1.5px var(--flare); background: var(--flare-tint); }
.btn-gold { background: transparent; color: var(--gold-bright); box-shadow: inset 0 0 0 1px var(--gold); }
.band--dark .btn-gold:hover,
.close .btn-gold:hover { background: var(--gold); color: var(--espresso); }
.band .btn-gold { color: var(--gilt-ink); }
.band .btn-gold:hover { background: var(--gold); color: var(--cream); }

/* =================== SECTIONS =================== */
.band { position: relative; padding: clamp(3.25rem, 7vw, 5.5rem) 0; }
.band--tint { background: var(--ivory-2); }
.band--dark { background: var(--espresso); color: var(--cream); }

.sechead { display: flex; align-items: center; gap: 1.5rem; margin-bottom: 2.2rem; }
.sechead--center { justify-content: center; }
.sechead-title {
  font-family: 'Cinzel', serif; font-weight: 600; text-transform: uppercase;
  letter-spacing: 0.14em; font-size: clamp(1.2rem, 3vw, 1.8rem); margin: 0; color: inherit; white-space: nowrap;
}
.sechead-rule { height: 1px; background: var(--gold); opacity: 0.6; flex: 1 1 auto; }
.sechead--center .sechead-rule { max-width: 6rem; }
.sechead-dark .sechead-title { color: var(--ink); }
.sechead-light .sechead-title { color: var(--cream); }
.sechead-light .sechead-rule { background: var(--gold-bright); opacity: 0.5; }

.section-sub { max-width: 40rem; line-height: 1.65; font-size: 1.08rem; color: var(--ink-soft); margin: -0.8rem 0 2rem; }
.section-sub.center { margin-left: auto; margin-right: auto; text-align: center; }
.band--dark .section-sub { color: var(--cream-soft); }

/* ---- The Evening ---- */
.lead-para { max-width: 40rem; font-size: clamp(1.1rem, 2.2vw, 1.28rem); line-height: 1.7; color: var(--ink); margin: 0 0 2.4rem; }
.drop { font-family: 'Cinzel', serif; font-weight: 600; float: left; font-size: 3.1em; line-height: 0.76; padding: 0.06em 0.14em 0 0; color: var(--flare); }
.journey {
  display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 0.7rem 1rem;
  padding: 1.5rem 1.25rem; margin-bottom: 2.8rem;
  border-top: 1px solid rgba(184, 144, 58, 0.4); border-bottom: 1px solid rgba(184, 144, 58, 0.4);
}
.j-step { font-family: 'Cinzel', serif; font-weight: 400; text-transform: uppercase; letter-spacing: 0.12em; font-size: clamp(0.66rem, 1.5vw, 0.78rem); color: var(--ink); }
.j-sep { width: 5px; height: 5px; background: var(--gold); transform: rotate(45deg); flex: none; }

.two-col { display: grid; grid-template-columns: 1fr; gap: 2.4rem; }
.col-head { font-family: 'Cinzel', serif; font-weight: 500; text-transform: uppercase; letter-spacing: 0.12em; font-size: 0.95rem; color: var(--ink); margin: 0 0 1rem; padding-bottom: 0.7rem; border-bottom: 1px solid var(--gold); }
.elegant-list { list-style: none; margin: 0; padding: 0; }
.elegant-list li { position: relative; padding: 0.55rem 0 0.55rem 1.5rem; line-height: 1.55; color: var(--ink-soft); }
.elegant-list li + li { border-top: 1px solid rgba(42, 32, 21, 0.08); }
.elegant-list li::before { content: ''; position: absolute; left: 0; top: 1.05rem; width: 4px; height: 4px; background: var(--gold); transform: rotate(45deg); }
.col-note { margin-top: 1.1rem; font-style: italic; color: var(--ink-soft); font-size: 0.98rem; line-height: 1.55; }

/* ---- The Honours ---- */
.dates { display: grid; grid-template-columns: 1fr; gap: 0; margin: 0 0 1.1rem; border: 1px solid rgba(232, 205, 136, 0.3); }
.dates > div { padding: 1.05rem 1.25rem; border-bottom: 1px solid rgba(232, 205, 136, 0.22); }
.dates > div:last-child { border-bottom: 0; }
.dates dt { font-family: 'Cinzel', serif; font-weight: 500; text-transform: uppercase; letter-spacing: 0.14em; font-size: 0.64rem; color: var(--gold-bright); }
.dates dd { margin: 0.35rem 0 0; font-size: 1.1rem; color: var(--cream); }
.dates-note { margin: 0 0 2.4rem; font-style: italic; line-height: 1.6; color: var(--cream-soft); font-size: 0.98rem; max-width: 46rem; }

.honours { list-style: none; margin: 0; padding: 0; }
.honour { border-top: 1px solid rgba(232, 205, 136, 0.2); }
.honour:last-child { border-bottom: 1px solid rgba(232, 205, 136, 0.2); }
.honour summary { display: grid; grid-template-columns: auto 1fr auto; align-items: center; gap: 1rem 1.3rem; padding: 1.35rem 0.25rem; cursor: pointer; list-style: none; }
.honour summary::-webkit-details-marker { display: none; }
.h-num { font-family: 'Cinzel', serif; font-weight: 600; font-size: 1.15rem; color: var(--flare-bright); min-width: 2.4rem; text-align: center; letter-spacing: 0.05em; }
.h-body { display: flex; flex-direction: column; gap: 0.3rem; }
.h-name { font-family: 'Cinzel', serif; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; font-size: clamp(0.98rem, 2.1vw, 1.16rem); color: var(--cream); line-height: 1.25; }
.h-focus { font-style: italic; font-size: 1.02rem; color: var(--cream-soft); line-height: 1.45; }
.h-mark { position: relative; width: 16px; height: 16px; flex: none; }
.h-mark::before, .h-mark::after { content: ''; position: absolute; background: var(--gold-bright); transition: transform 0.35s ease, opacity 0.35s ease; }
.h-mark::before { top: 7.5px; left: 0; width: 16px; height: 1px; }
.h-mark::after { top: 0; left: 7.5px; width: 1px; height: 16px; }
.honour details[open] .h-mark::after { transform: scaleY(0); opacity: 0; }

.h-detail { padding: 0.25rem 0.25rem 1.85rem 3.7rem; display: grid; gap: 1.35rem; animation: unveil 0.5s ease; }
@keyframes unveil { from { opacity: 0; transform: translateY(-6px); } to { opacity: 1; transform: none; } }
.h-field-row { display: grid; gap: 1.35rem; grid-template-columns: 1fr; }
.f-label { display: block; font-family: 'Cinzel', serif; font-weight: 500; text-transform: uppercase; letter-spacing: 0.16em; font-size: 0.62rem; color: var(--gold-bright); margin-bottom: 0.5rem; }
.h-field p { margin: 0; line-height: 1.65; color: var(--cream); opacity: 0.92; max-width: 66ch; }
.h-field ul { margin: 0; padding: 0; list-style: none; display: grid; gap: 0.55rem; max-width: 66ch; }
.h-field ul li { position: relative; padding-left: 1.4rem; line-height: 1.55; color: var(--cream); opacity: 0.92; }
.h-field ul li::before { content: ''; position: absolute; left: 0; top: 0.62rem; width: 4px; height: 4px; background: var(--gold-bright); transform: rotate(45deg); }

.guidance { margin-top: 2.8rem; padding: 1.9rem; border: 1px solid rgba(232, 205, 136, 0.3); }
.g-head { font-family: 'Cinzel', serif; font-weight: 500; text-transform: uppercase; letter-spacing: 0.12em; font-size: 0.92rem; color: var(--gold-bright); margin: 0 0 1.1rem; }
.guidance ul { margin: 0; padding: 0; list-style: none; display: grid; gap: 0.75rem; max-width: 70ch; }
.guidance li { position: relative; padding-left: 1.4rem; line-height: 1.6; color: var(--cream); opacity: 0.9; }
.guidance li::before { content: ''; position: absolute; left: 0; top: 0.62rem; width: 4px; height: 4px; background: var(--gold-bright); transform: rotate(45deg); }

.cta-row { margin-top: 2.6rem; text-align: center; }

/* ---- Admission ---- */
.prices { display: grid; grid-template-columns: 1fr; gap: 1.25rem; }
.price { position: relative; text-align: center; padding: 2rem 1.6rem; border: 1px solid rgba(184, 144, 58, 0.4); background: var(--ivory); }
.price--marked { border-color: var(--flare); box-shadow: inset 0 0 0 1.5px var(--flare); background: var(--flare-tint); }
.price-flag { display: inline-block; font-family: 'Cinzel', serif; font-weight: 600; text-transform: uppercase; letter-spacing: 0.14em; font-size: 0.58rem; color: #fff; background: var(--flare); padding: 0.28rem 0.7rem; margin-bottom: 0.9rem; }
.price-name { display: block; font-family: 'Cinzel', serif; font-weight: 500; text-transform: uppercase; letter-spacing: 0.12em; font-size: 0.74rem; color: var(--flare-deep); }
.price-fig { display: block; font-family: 'Cinzel', serif; font-weight: 600; font-size: clamp(2.4rem, 6vw, 3rem); color: var(--ink); margin: 0.7rem 0; }
.price-note { display: block; line-height: 1.55; color: var(--ink-soft); font-size: 0.96rem; max-width: 22rem; margin: 0 auto; }

/* ---- Patronage ---- */
.patronage .cta-row { margin-top: 2rem; }

/* ---- The Venue ---- */
.venue { display: grid; gap: 2.2rem; grid-template-columns: 1fr; }
.venue-plate { background: var(--espresso); color: var(--cream); padding: 2.2rem 2rem; }
.v-name { font-family: 'Cinzel', serif; font-weight: 500; font-size: clamp(1.4rem, 3.4vw, 1.9rem); margin: 0 0 1.1rem; line-height: 1.15; letter-spacing: 0.02em; }
.v-addr { font-style: normal; line-height: 1.8; color: var(--cream-soft); margin-bottom: 1.3rem; }
.v-map { font-family: 'Cinzel', serif; font-weight: 400; text-transform: uppercase; letter-spacing: 0.14em; font-size: 0.72rem; color: var(--gold-bright); text-decoration: none; border-bottom: 1px solid rgba(232, 205, 136, 0.5); padding-bottom: 2px; }
.v-map:hover { color: var(--cream); }
.v-suite { margin-top: 1.5rem; padding-top: 1.3rem; border-top: 1px solid rgba(232, 205, 136, 0.22); font-size: 0.98rem; color: var(--cream-soft); line-height: 1.6; }
.v-suite em { color: var(--cream); font-style: italic; }
.venue-notes { display: grid; gap: 1.6rem; grid-template-columns: 1fr; }
.vn h4 { font-family: 'Cinzel', serif; font-weight: 500; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.82rem; color: var(--ink); margin: 0 0 0.5rem; padding-bottom: 0.45rem; border-bottom: 1px solid rgba(184, 144, 58, 0.35); }
.vn p { margin: 0; line-height: 1.65; color: var(--ink-soft); font-size: 0.98rem; }
.vn a { color: var(--gilt-ink); text-decoration: underline; text-underline-offset: 3px; }

/* ---- Enquiries ---- */
.faqs { display: grid; gap: 0; }
.faq { border-top: 1px solid rgba(184, 144, 58, 0.3); }
.faq:last-child { border-bottom: 1px solid rgba(184, 144, 58, 0.3); }
.faq summary { display: flex; align-items: center; justify-content: space-between; gap: 1rem; padding: 1.25rem 0.1rem; cursor: pointer; list-style: none; font-family: 'Cinzel', serif; font-weight: 400; font-size: 1rem; letter-spacing: 0.01em; color: var(--ink); }
.faq summary::-webkit-details-marker { display: none; }
.faq-mark { position: relative; width: 15px; height: 15px; flex: none; }
.faq-mark::before, .faq-mark::after { content: ''; position: absolute; background: var(--gold); transition: transform 0.35s ease, opacity 0.35s ease; }
.faq-mark::before { top: 7px; left: 0; width: 15px; height: 1px; }
.faq-mark::after { top: 0; left: 7px; width: 1px; height: 15px; }
.faq[open] .faq-mark::after { transform: scaleY(0); opacity: 0; }
.faq p { margin: 0; padding: 0 0 1.3rem; line-height: 1.7; color: var(--ink-soft); max-width: 62ch; }

/* =================== THE CLOSE =================== */
.close { background: var(--espresso-2); color: var(--cream); padding: clamp(3.75rem, 8vw, 6rem) 0; text-align: center; }
.close-inner { position: relative; }
.close .fl { margin-bottom: 1.8rem; }
.close-sum { font-family: 'Cinzel', serif; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; font-size: clamp(1.5rem, 4.5vw, 2.6rem); margin: 0 0 1.2rem; color: var(--cream); line-height: 1.2; }
.close-when { font-family: 'EB Garamond', serif; font-size: 1.12rem; margin: 0 0 0.35rem; color: var(--cream); }
.close-where { font-family: 'EB Garamond', serif; font-style: italic; color: var(--cream-soft); margin: 0 0 2rem; }
.imprint { margin-top: 2.2rem; font-style: italic; font-size: 1.02rem; color: var(--cream-soft); }
.imprint a { color: var(--gold-bright); text-decoration: none; border-bottom: 1px solid rgba(232, 205, 136, 0.4); }
.imprint a:hover { color: var(--cream); }
.colophon { margin-top: 1.6rem; display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 0.35rem 0.7rem; font-family: 'Cinzel', serif; text-transform: uppercase; letter-spacing: 0.12em; font-size: 0.62rem; }
.colophon a, .colophon button { color: var(--cream-soft); text-decoration: none; background: none; border: 0; padding: 0; font: inherit; letter-spacing: inherit; text-transform: inherit; cursor: pointer; }
.colophon a:hover, .colophon button:hover { color: var(--gold-bright); }
.colophon > span { color: rgba(246, 239, 223, 0.3); }
.copyline { margin-top: 1rem; font-family: 'Cinzel', serif; text-transform: uppercase; letter-spacing: 0.14em; font-size: 0.6rem; color: var(--cream-soft); opacity: 0.7; }

/* =================== browser surfaces =================== */
.inv ::selection { background: var(--flare); color: #fff; }
.inv a:focus-visible, .inv summary:focus-visible, .inv button:focus-visible { outline: 2px solid var(--flare); outline-offset: 3px; }
.inv summary:focus-visible { outline-offset: -2px; }

/* =================== the reveal =================== */
.reveal-on .reveal { opacity: 0; transform: translateY(16px); }
.reveal-on .reveal.seen { opacity: 1; transform: none; transition: opacity 1s cubic-bezier(0.22, 1, 0.36, 1), transform 1s cubic-bezier(0.22, 1, 0.36, 1); }
.reveal-on .hairrule.seen span { animation: hairdraw 0.9s cubic-bezier(0.22, 1, 0.36, 1); }
@keyframes hairdraw { from { transform: scaleX(0); } to { transform: scaleX(1); } }
@media (prefers-reduced-motion: reduce) {
  .reveal-on .reveal, .reveal-on .reveal.seen { opacity: 1 !important; transform: none !important; transition: none !important; }
}

/* =================== responsive =================== */
@media (min-width: 720px) {
  .two-col { grid-template-columns: 1fr 1fr; gap: 3.5rem; }
  .dates { grid-template-columns: repeat(3, 1fr); }
  .dates > div { border-bottom: 0; border-right: 1px solid rgba(232, 205, 136, 0.22); }
  .dates > div:last-child { border-right: 0; }
  .h-field-row { grid-template-columns: 1fr 1fr; gap: 2.4rem; }
  .prices { grid-template-columns: repeat(3, 1fr); align-items: start; }
  .price--marked { transform: translateY(-0.6rem); padding-top: 2.6rem; padding-bottom: 2.6rem; }
  .venue { grid-template-columns: 0.9fr 1.1fr; gap: 3rem; align-items: start; }
  .venue-notes { grid-template-columns: 1fr 1fr; gap: 1.8rem 2.4rem; }
}
</style>
