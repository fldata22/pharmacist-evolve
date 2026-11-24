// Media folders shown on /media. To add a folder: put the web-sized photos in
// public/images/media/<slug>/ (with thumbs/ alongside), add a photo list file
// like media-catalyst-2026.js, add an entry here, and add the slug to the
// whereIn() list on the /media/{folder} route in routes/web.php.
import catalyst2026 from './media-catalyst-2026'

export const mediaFolders = [
  {
    slug: 'catalyst-conference-2026',
    title: 'Catalyst Conference 2026',
    description: 'Photos from the Pharmacist Evolve Catalyst Conference 2026.',
    photos: catalyst2026,
    cover: 'dsc03504.jpg',
  },
]

export const findFolder = (slug) => mediaFolders.find((f) => f.slug === slug)

export const photoUrl = (folder, file) => `/images/media/${folder.slug}/${file}`
export const thumbUrl = (folder, file) => `/images/media/${folder.slug}/thumbs/${file}`
