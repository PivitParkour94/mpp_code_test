# Tech Lead Interview Question
Local-Only Social App Admin Panel (Laravel + Filament)

## Scenario
You are leading the development of a standalone admin panel for a local-only social app.
This app will be used in an offline or LAN-based environment (e.g., a school, factory, or rural
center), with no external services or APIs.
You will use Laravel and Filament to build the admin interface.

## Functional Requirements

1. Entities

### User
#### Fields
- name
- email
- optional avatar (image upload)
- location (select from static list e.g., "Room A", "Zone 1", "Library")

### Post
#### Fields
- user_id
- content (text)
- optional image (upload)
- location (select from static list same options as users)
- created_at

### Comment
#### Fields
- post_id
- user_id
- body (text)
- created_at

## Admin Panel Features (via Filament Resources)

### User Resource
#### Form
- Create/edit name, email, avatar
- Select location (static dropdown)

#### Table
- Show: name, email, avatar, location
- Filters:
- Users by location
- Users who have posts
- Bulk Actions:
- Export users to CSV

### Post Resource
#### Form
- Select user (author)
- Enter post content

- Optional image upload
- Select location (static dropdown)

#### Table
- Show: content (truncated), author, image thumbnail, location, created_at
- Filters:
- Posts with images
- Posts by location
- Posts by user
- Optional: Approve/unapprove toggle for moderation

### Comment Resource
#### Form
- Select user and post
- Enter comment text

#### Table
- Show: comment body, user, post, created_at
- Filters:
- Comments from last 7 days
- (Optional) Comments on posts from a specific location (via relationship)

### Static Location Support
- Locations are hardcoded dropdown values in both User and Post forms
  Examples: "Room A", "Lab B", "Hall 3", "Library", "North Zone"
- These values are:
- Displayed in resource tables

- Filterable (e.g., filter users or posts by location)
- Searchable using Filaments global and column search

## Other Features
### Dashboard widget
- Total users, posts, comments
- Recent activity (posts in last 24 hours)
### Computed columns
- comments_count on Post table
### Table utilities
- Sorting and column-specific search
### Validation
- Required fields
- Image format and size checks

## Technical Constraints
- No external services or APIs
- Fully self-contained and locally hosted
- Store images locally (storage/app/public)
- Use Laravels default DB driver (SQLite, MariaDB, etc.)
- Add test cases for all resource operations
- Follow Laravel and Filament best practices



## Submmission
Submission Deadline: 5 days (13th April)
Reply with: A link to your GitHub Public repo or ZIP file + any comments or assumptions.
