<?php
//  LIAM BRENT SERRANO INFOS

$member = [
    "name"     => "Liam Brent Serrano",
    "first"    => "Liam Brent",
    "last"     => "Serrano",
    "role"     => "BSCSSE | Software Engineer",
    "phone"    => "+63 956 718 2358",
    "email"    => "lbserrano@fit.edu.ph",
    "location" => "Philippines",
    "linkedin" => "https://linkedin.com/in/liam-brent-serrano-6440aa279",
    "github"   => "https://github.com/TGOLiam",
    "photo"    => "../assets/Liam.jpeg",
    "slug"     => "liam",
];

//   Career Objective  
$career_objective =
    "A backend-focused software engineering student with a strong foundation in systems programming, " .
    "concurrency, and distributed systems design. I specialize in building reliable, performant " .
    "backend infrastructure. " .
    "As a Presidential Scholar at FEU Institute of Technology, I am driven by a deep curiosity for " .
    "how systems work at a low level, and I aim to contribute to engineering teams that build " .
    "meaningful, technically rigorous software. My goal is to grow into a backend systems engineer " .
    "or software architect who ships production-grade software with confidence.";

//   Education  
$education = [
    [
        "degree"         => "BS Computer Science",
        "specialization" => "Specialization: Software Engineering",
        "school"         => "FEU Institute of Technology",
        "year"           => "2024 – 2028",
        "status"         => "Presidential Scholar",
    ],
];

//   Skills (grouped)  
$skill_groups = [
    "Languages"  => ["Java", "Kotlin", "Python", "Go", "PHP", "SQL", "C"],
    "Frameworks" => ["Spring Boot", "Gradle", "FastAPI"],
    "Databases"  => ["Oracle SQL"],
    "Tools"      => ["JVM", "Linux", "Git", "Ollama"],
    "Concepts"   => ["Software Engineering", "Concurrency", "System Design", "Operating Systems", "Networking", "Security", "Algorithm Analysis", "Computer Architecture"],
];

// Flat list for the skills page bars (highlight primary languages)
$skills = [
    ["name" => "Java",             "years" => 3,   "label" => "years", "max" => 5],
    ["name" => "Python",           "years" => 3.5, "label" => "years", "max" => 5],
    ["name" => "Go",               "years" => 1.5, "label" => "years", "max" => 5],
    ["name" => "Kotlin",           "years" => 2,   "label" => "year",  "max" => 5],
    ["name" => "PHP",              "years" => 3.5,   "label" => "year",  "max" => 5],
    ["name" => "SQL / Oracle SQL", "years" => 2,   "label" => "years", "max" => 5],
    ["name" => "C",                "years" => 5,   "label" => "year",  "max" => 5],
    ["name" => "Spring Boot",      "years" => 1, "label" => "years", "max" => 5],
    ["name" => "FastAPI",          "years" => 2.5,   "label" => "year",  "max" => 5],
];

//   Affiliations  
$affiliations = [
    [
        "year"  => "2024–Present",
        "role"  => "Junior Officer",
        "org"   => "FEU Tech ACM Student Chapter",
        "desc"  => "Taught foundational AI prompting techniques to external beneficiaries as part of a community outreach program. Led and facilitated academic workshop events, guiding participants through hands-on activities.",
    ],
    [
        "year"  => "2024–Present",
        "role"  => "Presidential Scholar",
        "org"   => "FEU Institute of Technology",
        "desc"  => "Recipient of the Presidential Scholarship at FEU Tech, awarded for outstanding academic performance.",
    ],
];

//   Projects (w personal projs)  
$projects = [
    [
        "title" => "Sentinel — Reverse Proxy Server",
        "stack" => "Java 21 · Standard Library Only",
        "bullets" => [
            "Built a reverse proxy from scratch handling HTTP parsing, request routing, and response forwarding over raw TCP sockets.",
            "Implemented a token bucket rate limiter with per-IP enforcement and lazy refill, rejecting excess traffic.",
            "Designed a load balancer supporting round-robin and least-connections algorithms using Java 21 virtual threads.",
        ],
    ],
    [
        "title" => "EzRoute — Decision Support System for Commute Optimization",
        "stack" => "Python · pandas · scikit-learn",
        "bullets" => [
            "Built a weighted sum ranking engine evaluating public transport routes across cost, time, and convenience criteria.",
            "Applied data analysis techniques to model and compare multi-criteria transport options.",
            "Designed end-to-end system flow and user interaction model using a design thinking methodology.",
            "Placed 2nd at Design Thinking Summit 2025.",
        ],
    ],
    [
        "title" => "FinSight — Agentic Financial Management Platform",
        "stack" => "Python · FastAPI · Agentic AI · Ollama",
        "bullets" => [
            "Designed a financial management platform for SMB owners centered on proactive, agent-driven financial monitoring.",
            "Architected an inference layer that keeps user financial data off third-party AI providers.",
            "Defined a three-tier feature model scaling agent capabilities with business maturity.",
        ],
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
$job1->setTitle("IT Assistant Intern");
$job1->setDate("February 2023 – March 2023 · Full-Time");
$job1->setProject("Web Redesign & IT Infrastructure Support");
$job1->setCompany("Toyota Global City Inc.");
$job1->setDescription(
    "Completed a full-time internship at Toyota Global City Inc., contributing to both web development " .
    "and IT infrastructure tasks. Worked within a corporate IT environment, gaining exposure to " .
    "enterprise-level systems and workflows."
);
$job1->setBullets([
    "Redesigned a vehicle information page using HTML, CSS, and JavaScript via WordPress, restructuring layout and visual hierarchy to align with the main branch website's design standards.",
    "Assisted in diagnosing and resolving network outages and IT infrastructure issues across the organization.",
]);
$job1->setSkills("HTML, CSS, JavaScript, WordPress, Networking, IT Support");

$job2 = new WorkExperience();
$job2->setTitle("Junior Officer");
$job2->setDate("2024 – Present");
$job2->setProject("Community Outreach & Academic Workshops");
$job2->setCompany("FEU Tech ACM Student Chapter");
$job2->setDescription(
    "Serves as a Junior Officer in the FEU Tech ACM Student Chapter, contributing to both outreach " .
    "programs and internal academic events. Involved in planning, facilitating, and executing " .
    "technical workshops and community-focused activities."
);
$job2->setBullets([
    "Taught foundational AI prompting techniques to external beneficiaries as part of a community outreach program.",
    "Led and facilitated academic workshop events, guiding participants through hands-on activities.",
]);
$job2->setSkills("Public Speaking, Workshop Facilitation, AI Prompting, Community Outreach, Leadership");

$jobs = [$job1, $job2];
