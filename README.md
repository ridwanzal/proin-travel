# proin-travel
PROIN Travel


## PROIN env config

### Environment settings

- CUST_WILAYAH=jakarta
- CUST_PHONE=6281351518500
- CUST_TELEPHON=
- CUST_FB=
- CUST_IG=
- CUST_ADDRESS=
- PRICE_JAN=
- PRICE_FEB="29.500.000"
- PRICE_MAR="33.000.000"
- PRICE_APR="44.250.000"
- PRICE_MEI=
- PRICE_JUN=
- PRICE_JUL=
- PRICE_AG=
- PRICE_SEP=
- PRICE_OKT=
- PRICE_NOV=
- PRICE_DES=


# Table Format

## Paket (paket)
- id
- image (text)
- title (str 256)
- content (text)
- price
- cta 
- cta_info

## Dokumentasi (dokumentasi)
- id
- image

## Kontak (kontak)
- id
- alamat
- nomor_telepon
- facebook
- instagram
- linkedin
- youtube 

## Testimoni (testimoni)
- id
- image 
- content
- subtitle
- type (1,2) 1.image 2.video

## Bonus
### Bonus list (bonus_list)
- id
- image
- title
- description

### Bonus higlight (bonus_highlight)
- id
- content

## FAQ (faq)
- id
- title
- description

## General CTA
- id 
- cta_text
- cta_link
- cta_type (1. kontak, 2.agen, 3. haji-khusus)