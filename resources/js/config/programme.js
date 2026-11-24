// Single source of truth for the OSPAP Pharmacists Coaching Programme details
// shown on the site (For Pharmacists page, home page card). Change things
// here rather than in the pages.

export const programme = {
  name: 'OSPAP Pharmacists Coaching Programme',
  duration: 'Six weeks',
  durationShort: '6 weeks',
  cohortStart: 'February/March 2027',
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
  { name: 'Nirusha Govender FRCPharm', org: 'MEDIQIS Healthcare Consultancy' },
]

// Bios are from Faith's amended brief (faith-coaching-ng-amendments.docx,
// Nov 2026). Photos: the Nirusha photo matches the one already used for her
// on the Conference page; the Faith photo is from the same studio set as the
// About page portrait. Both still to be confirmed by Faith.
export const coaches = [
  {
    name: 'Faith Adebimpe MRCPharm',
    role: 'Pharmacist Independent Prescriber, Coach & Founder of Pharmacist Evolve',
    photo: '/images/coaches/faith-adebimpe.jpg',
    photoPosition: 'center 20%',
    bio: [
      'Faith is a pharmacist, independent prescriber, coach and founder of Pharmacist Evolve. She grew up in Nigeria and completed her Master of Pharmacy at University College London, and her own experience of finding her feet in UK pharmacy shaped her interest in supporting internationally trained pharmacists to build confidence, find their voice and achieve their professional ambitions.',
      'Through Pharmacist Evolve, Faith supports internationally trained pharmacists through coaching, mentoring, professional networks and collaboration with employers and organisations.',
      'In this programme, Faith brings her experience of UK pharmacy practice and her understanding of the transition faced by internationally qualified pharmacists. She helps participants navigate unfamiliar professional environments, build confidence and recognise how their experience can contribute to their future careers.',
    ],
  },
  {
    name: 'Nirusha Govender FRCPharm, PGCert Independent Prescribing',
    role: 'Lead Professional Coach | Founder and Principal Consultant, MEDIQIS Healthcare Consultancy',
    photo: '/images/coaches/nirusha-govender.jpg',
    photoPosition: 'center 25%',
    bio: [
      'Nirusha is an experienced pharmacist, former NHS senior leader and professional coach, with nearly 30 years of experience across clinical practice, pharmacy leadership, medicines optimisation and healthcare transformation.',
      'Having completed the OSPAP journey herself, she understands first-hand the challenges, opportunities and professional adjustments involved in transitioning into UK pharmacy practice as an internationally qualified pharmacist.',
      'As Lead Professional Coach, Nirusha has designed the bespoke coaching framework underpinning this programme. She brings together her lived experience, extensive pharmacy expertise and professional coaching skills to help participants recognise their strengths, articulate their transferable skills, challenge limiting assumptions and develop a confident professional identity.',
      'Her coaching approach is grounded in helping people recognise their strengths, value their experiences and see possibilities they may not have considered. Having experienced the OSPAP journey herself, Nirusha is passionate about ensuring internationally qualified pharmacists do not lose sight of the knowledge, skills and professional identity they have worked hard to build. She wants them to feel confident bringing the full breadth of their professional experience into the UK pharmacy environment, recognising its value and building on it to shape their future careers.',
    ],
  },
]
