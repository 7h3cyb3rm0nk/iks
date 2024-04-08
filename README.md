

```
iks
├── tailwind.config.js
├── README.md
├── index.php
├── connection.php
├── sql-schema
│   └── indian-knowledge-system.sql
├── js
│   ├── jquery.js
│   └── scripts.js
├── assets
│   ├── images-art-forms-jpg
│   │   ├── kathakali.jpg
│   │   └── Mohiniattam.jpg
│   ├── jpgs
│   │   ├── plants-bg.jpg
│   │   ├── ayurveda.jpg
│   │   └── search-bg.jpg
│   └── pngs
│       ├── plants-bg.png
│       ├── ayurveda.png
│       └── main-bg.png
├── api
│   ├── getPlantDescriptionApi.php
│   ├── diseaseSuggestionsApi.php
│   └── plantSuggestionsApi.php
├── pages
│   ├── art-forms.php
│   ├── first-aids.php
│   ├── ayurmedics.php
│   ├── yoga.php
│   ├── header.php
│   ├── ayurmedics
│   │   ├── getDiseases.php
│   │   └── getPlants.php
│   └── artforms.php
└── css
    ├── base.css
    └── styles.css
```

---

## index.php

The index page for ayurmedics.

---

## connection.php

The connection information for the SQL object.

---

## sql-schema/

DB structure.

---

## js/

- JavaScript script files
- `scripts.js` - Scripts for the navbar
- `jquery.js`

---

## assets/

Images and other assets for use.

---

## api/

- APIs for each section
- `getPlantDescriptionApi.php` - For fetching plant descriptions
- `diseaseSuggestionsApi.php` - For suggestions for diseases in the remedy search section in ayurmedics
- `plantSuggestionsApi.php` - For suggestions for plants in the plant search section in ayurmedics

---

## pages/

### Pages for each section

- Ayurmedics
- Art forms
- First Aids
- Yoga

---

## pages/ayurmedics/

### Sub-pages for the ayurmedics section

- `getPlants.php`
- `getDiseases.php`

---

## css/

- `base.css` - Base Tailwind CSS file
- `styles.css` - Tailwind output CSS file