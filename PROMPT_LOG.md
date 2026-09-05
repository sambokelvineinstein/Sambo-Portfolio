# AI Prompt Log

## Interaction 1: Project Setup & MVC Scaffolding
- **Prompt:** "How do I pass structured portfolio data from a Laravel controller to a Blade view?"
- **AI Output:** Provided a sample `PortfolioController` using `compact()` to pass an array of personal details to `portfolio.blade.php`.
- **Action Taken:** Accepted with edits. Added personal profile information and school details specifically for Data Center College of the Philippines - Bangued.

## Interaction 2: Front-End UI Layout & Customization
- **Prompt:** "Generate a modern dark-themed Tailwind CSS layout for a developer portfolio including education, certifications, and skills badges."
- **AI Output:** Generated a full Blade template using Tailwind CSS via CDN with card-based sections.
- **Action Taken:** Accepted as base layout. Later modified the structure to remove the LinkedIn profile link and expanded the Education section to list College, Senior High School (TVL-ICT), and Elementary education separately.

## Interaction 3: Troubleshooting Git Staging Error
- **Prompt:** "fatal: pathspec 'public/images/' did not match any files"
- **AI Output:** Explained that Git failed because the `public/images/` directory was empty or missing, causing the entire `git add` and `git commit` sequence to abort.
- **Action Taken:** Accepted solution. Ran `git add resources/views/portfolio.blade.php` individually to stage untracked view files cleanly before committing.

## Interaction 4: Vercel Deployment Configuration
- **Prompt:** "option b, give link of vercel"
- **AI Output:** Provided official Vercel documentation links, along with step-by-step instructions to add an `api/index.php` entry point and a `vercel.json` configuration file for PHP serverless runtime deployment.
- **Action Taken:** Accepted as-is and added `vercel.json` and `api/index.php` to the repository root for live deployment on Vercel.