
```
iks
├── connection.php
├── assets
│   ├── images-art-forms-jpg
│   │   ├── kathakali.jpg
│   │   └── Mohiniattam.jpg
│   ├── pngs
│   │   ├── main-bg.png
│   │   ├── plants-bg.png
│   │   └── ayurveda.png
│   ├── plants
│   │   ├── tith_begun.jpg
│   │   ├── garlic.jpg
│   │   ├── bashok.png
│   │   ├── arjun.jpg
│   │   ├── thankuni_pata.jpg
│   │   ├── bitter_gourd.png
│   │   ├── README.md
│   │   ├── amla.jpg
│   │   ├── beal.jpg
│   │   ├── tulsi.jpg
│   │   ├── aloe_vera.jpg
│   │   ├── swarna_lata.jpg
│   │   ├── bitter_leaf.jpg
│   │   ├── black_cohos.jpg
│   │   ├── warning.png
│   │   ├── neem.jpg
│   │   └── ic_arrow_right.png
│   ├── diseases
│   │   └── README.md
│   └── jpgs
│       ├── plants-bg.jpg
│       ├── ayurveda.jpg
│       └── search-bg.jpg
├── css
│   ├── base.css
│   └── styles.css
├── php
│   └── get.php
├── index.php
├── sql-schema
│   └── indian-knowledge-system.sql
├── api
│   ├── diseaseSuggestionsApi.php
│   ├── getPlantDescriptionApi.php
│   └── plantSuggestionsApi.php
├── README.md
├── js
│   ├── jquery.js
│   └── scripts.js
├── tailwind.config.js
└── pages
    ├── header.php
    ├── ayurmedics.php
    ├── first-aids.php
    ├── yoga.php
    ├── ayurmedics
    │   ├── getDiseases.php
    │   └── getPlants.php
    ├── artforms.php
    └── art-forms.php

```

---

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

## assets/plants

assets and data for plants 

## assets/diseases 

assets and data for diseases

---

## api/

- APIs for each section
- `getPlantDescriptionApi.php` - For fetching plant descriptions
- `diseaseSuggestionsApi.php` - For suggestions for diseases in the remedy search section in ayurmedics
- `plantSuggestionsApi.php` - For suggestions for plants in the plant search section in ayurmedics

---

## pages/

### Pages for each section
- Header - navbar for iks
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