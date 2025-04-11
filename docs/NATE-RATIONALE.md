## Rationale

- As this is a demo app, I have expanded the scope a little to show future feature ideas
in the ERD around reactions on posts and comments
- Filepaths stored in the system will have a max length of 3000 characters. If filepaths got longer 
than that there would be a bit of effort changing it, but using MEDIUM TEXT would allow for 16,777,215 characters which seems excessive.
Fun fact: Atlassian have demonstrated the difficulty of choosing the wrong size early on with this issue: https://jira.atlassian.com/browse/JRACLOUD-75440
- Post and Comment size should be reduced for readability and good UX in a social app anyway, however, I have made a hard limit of 10000 characters in the DB, this means we can allow for a decent amount of rich text content in the future (inserting links to other websites, embedded images and videos etc)
- Although the right solution for multiple media would be to follow FB's UX and have images and videos etc uploaded separately, which would require some additional changes to the database.

