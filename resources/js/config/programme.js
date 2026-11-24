// Single source of truth for the OSPAP Pharmacists Coaching Program details
// shown on the site (For Pharmacists page, home page card). Change things
// here rather than in the pages.

export const programme = {
  name: 'OSPAP Pharmacists Coaching Program',
  duration: 'Six weeks',
  durationShort: '6 weeks',
  cohortStart: 'Feb/March 2027',
  participantsPerCoach: 10,

  // Enrolment is handled off-site on a Google Form.
  enrolUrl: 'https://docs.google.com/forms/d/e/1FAIpQLScFS-kSqQl-CHjP6a6raHfQttbMotlwvMfzaKg3qOJF15oZrw/viewform?usp=header',

  // Free introductory webinar with Faith and Nirusha (Eventbrite).
  webinar: {
    title: 'Introduction to the OSPAP pharmacist coaching programme',
    url: 'https://www.eventbrite.co.uk/e/all-about-the-ospap-pharmacists-coaching-program-tickets-2005390796857?aff=oddtdtcreator',
  },

  // Standard pay-in-full price (GBP).
  price: 650,

  // Instalment option, unchanged from the previous programme.
  // TODO(Faith): confirm whether this still applies now the full price is £650.
  instalments: { count: 2, amount: 275 },
}

// Black Friday offer. To switch it off, set `enabled: false`, or set
// `endsAt` to an ISO date/time and it hides itself after that moment.
// TODO(Faith): no end date given yet.
export const blackFridayOffer = {
  enabled: true,
  endsAt: null, // e.g. '2026-12-01T23:59:59Z'
  label: 'Black Friday offer',
  percentOff: 23,
  price: 500,
}

export function offerIsActive(now = new Date()) {
  if (!blackFridayOffer.enabled) return false
  if (blackFridayOffer.endsAt && now > new Date(blackFridayOffer.endsAt)) return false
  return true
}

export function currentPrice() {
  return offerIsActive() ? blackFridayOffer.price : programme.price
}

export const partnership = [
  { name: 'Faith Adebimpe MRCPharm', org: 'Pharmacist Evolve' },
  { name: 'Nirusha Govender FRCPharm', org: 'Mediqis' },
]

// Bios are as written in Faith's November 2026 brief.
// Photos: the Nirusha photo matches the one already used for her on the
// Conference page; the Faith photo is from the same studio set as the About
// page portrait. Both still to be confirmed by Faith.
export const coaches = [
  {
    name: 'Faith Adebimpe MRCPharm',
    role: 'Pharmacist Independent Prescriber, Coach & Founder of Pharmacist Evolve',
    photo: '/images/coaches/faith-adebimpe.jpg',
    photoPosition: 'center 20%',
    bio: [
      'Faith is a pharmacist, independent prescriber, coach and founder of Pharmacist Evolve. She grew up in Nigeria and completed her Master of Pharmacy at University College London. Her experience of finding her feet in UK pharmacy shaped her interest in how pharmacists build confidence, find their voice within the Pharmacy sector and work out how to achieve the best out of their pharmacy careers in the UK. She founded Pharmacist Evolve to support internationally trained pharmacists through coaching and mentoring, professional networks and collaboration with employers and organisations.',
      'Through the group coaching programme, Faith brings together her experience in UK pharmacy practice and her work supporting internationally trained pharmacists. She helps participants recognise the value of their previous experience, navigate unfamiliar workplace expectations and speak confidently about what they bring to the pharmacy sector. She gives international pharmacists space to work through real situations, navigating pharmacy practice in the UK towards real world career success.',
    ],
  },
  {
    name: 'Nirusha Govender FRCPharm, PGCertIP',
    role: 'Pharmacist, Founder of MEDIQIS & Qualified Coach',
    photo: '/images/coaches/nirusha-govender.jpg',
    photoPosition: 'center 25%',
    bio: [
      'Nirusha is Founder and Principal Consultant of MEDIQIS Healthcare Consultancy, an experienced pharmacist, former NHS senior leader and qualified coach, with nearly 30 years of experience across clinical practice, pharmacy leadership, medicines optimisation and healthcare transformation. Having completed the OSPAP journey herself, she understands first-hand the challenges, opportunities and professional adjustments involved in transitioning into UK pharmacy practice as an internationally qualified pharmacist.',
      'Through the MEDIQIS coaching programme, Nirusha brings together her lived OSPAP experience, extensive pharmacy expertise and professional coaching skills to help internationally qualified pharmacists recognise and articulate their transferable skills, build confidence, navigate their transition into the UK profession and develop their professional identity. Her approach goes beyond the OSPAP qualification, empowering pharmacists to draw on their previous experience, embrace their strengths and build fulfilling, confident and successful careers in UK pharmacy.',
    ],
  },
]
