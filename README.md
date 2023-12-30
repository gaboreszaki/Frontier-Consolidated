# FRCN - Frontier Consolidated Official Website

## Planned Pages/features tracker:

__Visitor/Guest pages__
- [x] Landing Page
  - [x] Navs & layouts
  - [x] News display
  - [x] Announcements display
  - [x] Event reports list and popup
- [ ] Community page
  - [x] Display prototype
- [ ] Organisation page
- [ ] Activities page
- [ ] Guides and resources page


---
__Admin pages__
- [x] Authentication and password services
  - [x] Login & logout
  - [ ] Password recovery

- [x] Admin panel v0.1
- [x] News - CRUD
  - [x] News
  - [x] Announcements
- [x] Event reports - CRUD
  - [x] Image conversions
  - [ ] Image manipulation
  - [x] Image removal by name
- [ ] Static page content generator (low priority)
  - [x] Prototype
  - [x] Text On image display
  - [ ] OnFly editor 
- [ ] File upload manager
- [ ] Guides
- [ ] User/self pages
  - [ ] profile forms
  - [ ] security forms
  - [ ] oAuth/token Forms

- [ ] Administration
  - [ ] GUI User manager
  - [ ] GUI Image lib. manager
  - [ ] GUI Invitation system
  - [ ] GUI Dashboard

---
# Planned Contents:
<sup>_(Public facing pages, and their descriptions:)_</sup>


### News & announcements
A place to communicate news to the public
> Admin page CRUD interface with a checkbox to differentiate between News and Announcement

_**FEATURE - News** -> REST API with Token based auth (laravel sanctum)_


### Activities
Activities is a dynamic page where we can showcase regular events and past events results.
> Admin page form interface to generate after event reports

> Admin page form to showcase regular events

### Community
Static, Scrollable, "sales" page, for showcase what's the benefit to join to our community
> Low priority admin interface, the content is mostly static and not gonna regularly change.

### Organisation
Static, Scrollable, "sales" page, for showcase what's the benefit to join to the Organisation
> Low priority admin interface, the content is mostly static and not gonna regularly change.

### Guides and resources
A place to organise and collect Guides and the corresponding tools, assets to the guide.
> Frontend: 
> - Searchable easy interface
> - Tags and version to make easy to find the latest guide to a specific task

> Admin: 
> - Easy, intuitive form for create a guide, with a place to upload files.
> - Tag and version factory