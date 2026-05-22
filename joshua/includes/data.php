<?php
//  JOSHUA DANREI C. RUIZ infos


$member = [
    "name"     => "Joshua Danrei C. Ruiz",
    "first"    => "Joshua Danrei",
    "last"     => "Ruiz",
    "role"     => "BSCSSE | Software Engineer",
    "phone"    => "(+63) 905 305 4898",
    "email"    => "joshuaruiz1031@gmail.com",
    "location" => "Philippines",
    "birthday" => "October 31, 2005",
    "linkedin" => "https://www.linkedin.com/in/joshua-danrei-ruiz-766103381/",
    "github"   => "https://github.com/NomVeo",
    "photo"    => "../assets/joshua.jpg",
    "slug"     => "joshua",
];

//   Career Objective  
$career_objective =
    "A dedicated and passionate developer specializing in web development using HTML, CSS, and PHP. " .
    "I enjoy creating simple, functional, and user-friendly systems that solve real-world problems. " .
    "With experience across multiple programming languages including C++, Java, and Python, I aim to " .
    "grow into a well-rounded software engineer who can contribute to meaningful projects — from " .
    "business applications to software automation — while continuing to sharpen both my technical " .
    "and collaborative skills in a professional environment.";

//   Education  
$education = [
    [
        "degree"         => "BS Computer Science",
        "specialization" => "Specialization: Software Engineering",
        "school"         => "FEU Institute of Technology",
        "year"           => "2024 – 2028",
        "status"         => "Currently Enrolled",
    ],
];

//   Skills  
$skills = [
    ["name" => "HTML",       "years" => 3, "label" => "years", "max" => 5, "rating" => 10],
    ["name" => "CSS",        "years" => 3, "label" => "years", "max" => 5, "rating" => 9],
    ["name" => "PHP",        "years" => 2, "label" => "years", "max" => 5, "rating" => 9],
    ["name" => "Java",       "years" => 2, "label" => "years", "max" => 5, "rating" => 9],
    ["name" => "C++",        "years" => 2, "label" => "years", "max" => 5, "rating" => 8],
    ["name" => "Python",     "years" => 1, "label" => "year",  "max" => 5, "rating" => 7],
    ["name" => "Teamwork",   "years" => 3, "label" => "years", "max" => 5, "rating" => 10],
];

//   Affiliations  
$affiliations = [
    [
        "year"  => "2024–Present",
        "role"  => "Student Member",
        "org"   => "FEU Tech Computer Science Department",
        "desc"  => "Active participant in department academic activities and programs.",
    ],
    [
        "year"  => "2024–Present",
        "role"  => "Collaborative Team Member",
        "org"   => "BSCSSE Group Portfolio Project — FEU Tech",
        "desc"  => "Worked with teammates to build a multi-member web-based portfolio system using PHP.",
    ],
];

//   Work Experience  
class WorkExperience {
    private $_title, $_date, $_project, $_company, $_description, $_bullets, $_skills;
    function setTitle($v)       { $this->_title       = $v; }
    function setDate($v)        { $this->_date        = $v; }
    function setProject($v)     { $this->_project     = $v; }
    function setCompany($v)     { $this->_company     = $v; }
    function setDescription($v) { $this->_description = $v; }
    function setBullets($v)     { $this->_bullets     = $v; }
    function setSkills($v)      { $this->_skills      = $v; }
    function getTitle()         { return $this->_title;       }
    function getDate()          { return $this->_date;        }
    function getProject()       { return $this->_project;     }
    function getCompany()       { return $this->_company;     }
    function getDescription()   { return $this->_description; }
    function getBullets()       { return $this->_bullets;     }
    function getSkills()        { return $this->_skills;      }
}

$job1 = new WorkExperience();
$job1->setTitle("Senior Developer");
$job1->setDate("2026 – Present");
$job1->setProject("Web Systems & Business Applications");
$job1->setCompany("FoundersNova Solutions Inc.");
$job1->setDescription(
    "Lead developer responsible for designing and building web systems and business applications. " .
    "Oversees development workflows and ensures delivery of functional, scalable solutions for clients."
);
$job1->setBullets([
    "Developed and maintained multiple web-based business systems using HTML, CSS, PHP, and Java.",
    "Coordinated with cross-functional teams to gather requirements and translate them into working software.",
]);
$job1->setSkills("HTML, CSS, PHP, Java, System Design, Team Leadership");

$job2 = new WorkExperience();
$job2->setTitle("Junior Web Developer");
$job2->setDate("2025 – 2026");
$job2->setProject("Responsive Website Development");
$job2->setCompany("SampleCraft Studio");
$job2->setDescription(
    "Assisted the development team in building responsive, cross-browser-compatible websites for various clients. " .
    "Gained hands-on experience in front-end development and client collaboration."
);
$job2->setBullets([
    "Built and tested responsive layouts using HTML and CSS, ensuring consistency across devices.",
    "Collaborated with senior developers to implement UI components and fix front-end bugs.",
]);
$job2->setSkills("HTML, CSS, Responsive Design, Cross-browser Testing");

$job3 = new WorkExperience();
$job3->setTitle("Freelance Developer");
$job3->setDate("2024 – 2025");
$job3->setProject("Small Business Websites & Personal Portfolios");
$job3->setCompany("Self-employed");
$job3->setDescription(
    "Independently designed and developed websites for small businesses and individuals. " .
    "Handled full project lifecycle from client consultation and requirements gathering to deployment."
);
$job3->setBullets([
    "Delivered custom portfolio and business websites tailored to each client's brand and goals.",
    "Managed client communication, project timelines, and revisions independently.",
]);
$job3->setSkills("HTML, CSS, PHP, Client Management, Freelancing");

$job4 = new WorkExperience();
$job4->setTitle("Senior Programmer");
$job4->setDate("2025 – 2026");
$job4->setProject("Rendering & Automation Software");
$job4->setCompany("Independent / Project-based");
$job4->setDescription(
    "Programmed various software tools including rendering engines and automation scripts. " .
    "Applied knowledge of C++ and Python to build performance-focused programs."
);
$job4->setBullets([
    "Developed automation scripts that reduced repetitive task time significantly.",
    "Built and tested rendering software components using C++ with a focus on performance optimization.",
]);
$job4->setSkills("C++, Python, Automation, Software Development");

$job5 = new WorkExperience();
$job5->setTitle("Project Manager");
$job5->setDate("2026");
$job5->setProject("Game & Interactive Media Projects");
$job5->setCompany("WorldOfLight Studios");
$job5->setDescription(
    "Managed project timelines, team coordination, and deliverables for interactive media and game development projects " .
    "at WorldOfLight Studios. Acted as the bridge between creative and technical teams."
);
$job5->setBullets([
    "Organized sprint planning and task delegation across a team of developers and designers.",
    "Ensured project milestones were met on schedule by monitoring progress and resolving blockers.",
]);
$job5->setSkills("Project Management, Team Coordination, Agile, Communication");

$jobs = [$job1, $job2, $job3, $job4, $job5];
