var labels = [];
var scores = [];
let majorTitle = document.getElementById("my-major");
let majorText = document.getElementById("my-major-text");

const majors = {
  "Accounting": {
    title: "Accounting",
    description:
      "This major prepares students for careers in accounting and finance, with a focus on financial analysis, taxation, and auditing.",
  },
  "African American and African Diaspora Studies": {
    title: "African American and African Diaspora Studies",
    description:
      "This major explores the history, culture, and experiences of people of African descent, with a focus on the African American experience in the United States.",
  },
  "Anthropology": {
    title: "Anthropology",
    description:
      "This major examines the diversity of human cultures and societies, with a focus on cultural anthropology, archaeology, and biological anthropology.",
  },
  "Art Education": {
    title: "Art Education",
    description:
      "This major prepares students for careers as art teachers in K-12 schools, with a focus on developing teaching skills and an understanding of art history and theory.",
  },
  'Biochemistry': {
    title: 'Biochemistry',
    description: 'This major focuses on the chemical processes and molecules that occur within living organisms, with a focus on understanding biological systems at the molecular level.'
  },
  "Biology": {
    title: "Biology",
    description:
      "This major explores the science of living organisms, with a focus on genetics, ecology, and molecular biology.",
  },
  'Birth Through Kindergarten Teacher Education': {
    title: 'Birth Through Kindergarten Teacher Education',
    description: 'This major prepares students to teach young children from birth to age five in a variety of settings, including public and private schools, childcare centers, and Head Start programs.'
  },
  "Business Administration": {
    title: "Business Administration",
    description:
      "This major prepares students for careers in business management and leadership, with a focus on accounting, finance, marketing, and human resources.",
  },
  "Chemistry": {
    title: "Chemistry",
    description:
      "This major explores the science of matter and energy, with a focus on chemical reactions, organic chemistry, and physical chemistry.",
  },
  "Computer Science": {
    title: "Computer Science",
    description:
      "This major explores the theory and practice of computer programming and information technology, with a focus on software development, data structures, and algorithms.",
  },  
  'Dance': {
    title: 'Dance',
    description: 'This major explores the theory, history, and practice of dance, with a focus on performance, choreography, and production.'
  },
  'Drama': {
    title: 'Drama',
    description: 'This major focuses on the study of theater and drama, including acting, directing, playwriting, stage design, and production. Students develop skills in critical analysis, performance, and creative expression.'
  },
  'Economics': {
    title: 'Economics',
    description: 'This major focuses on the study of how societies allocate scarce resources among competing needs and wants. Students learn about the principles of microeconomics and macroeconomics, as well as the applications of economic theory in areas such as international trade, public policy, and business.'
  },
  
  'Elementary Education (K–6)': {
    title: 'Elementary Education (K–6)',
    description: 'This major prepares students to teach in elementary school settings, with a focus on children from kindergarten through sixth grade. Students learn about child development, curriculum design, instructional strategies, and classroom management, as well as how to create a positive and inclusive learning environment for all students.'
  },  
  'Entrepreneurship': {
    title: 'Entrepreneurship',
    description: 'This major focuses on the study of starting and running a new business venture, including idea generation, business planning, marketing, finance, and operations. Students learn how to identify opportunities, develop innovative solutions, and create value for customers, as well as how to manage risk and uncertainty in a dynamic business environment.'
  },
  'Environment and Sustainability': {
    title: 'Environment and Sustainability',
    description: 'This major focuses on the study of environmental science and policy, with a focus on sustainability and resource management. Students learn about the natural and social systems that shape our environment, as well as the human impact on natural resources and ecosystems. The program emphasizes hands-on learning and practical skills for addressing environmental challenges.'
  },
  'Finance': {
    title: 'Finance',
    description: 'This major focuses on the study of financial management and investment analysis, including topics such as financial markets, corporate finance, investment theory, and risk management. Students learn how to apply financial theory to real-world business problems and make informed investment decisions.'
  },
  
  'Geography': {
    title: 'Geography',
    description: 'This major focuses on the study of the earth’s physical features and human activity, including topics such as climate change, globalization, urbanization, and natural resource management. Students learn about cartography, spatial analysis, and geographic information systems (GIS), as well as how to use these tools to solve real-world problems.'
  },
  
  'History': {
    title: 'History',
    description: 'This major focuses on the study of the human past, including topics such as political, social, economic, and cultural history. Students learn how to analyze primary and secondary sources, develop historical arguments, and interpret historical events and processes. The program emphasizes critical thinking and communication skills, as well as the application of historical knowledge to contemporary issues.'
  },

  'Hospitality and Tourism Management': {
    title: 'Hospitality and Tourism Management',
    description: 'This major focuses on the study of the hospitality and tourism industry, including topics such as hotel and restaurant management, event planning, tourism marketing, and sustainable tourism. Students learn about customer service, leadership, and business operations, as well as the cultural and social impact of the hospitality and tourism industry.'
  },
  
  'Human Development and Family Studies': {
    title: 'Human Development and Family Studies',
    description: 'This major focuses on the study of human development across the lifespan, including topics such as child development, family relationships, aging, and cultural diversity. Students learn about research methods, data analysis, and theories of human development, as well as how to apply this knowledge to real-world problems and contexts.'
  },
  
  'Information Systems and Supply Chain Management': {
    title: 'Information Systems and Supply Chain Management',
    description: 'This major focuses on the study of information technology and supply chain management, including topics such as database management, programming, network security, logistics, and supply chain optimization. Students learn about the role of information technology in business operations, as well as how to design, implement, and manage effective supply chain systems.'
  },
  'Integrated Professional Studies Online': {
    title: 'Integrated Professional Studies Online',
    description: 'This major is an online degree completion program that is designed for students who have already completed at least 60 credit hours of college coursework. It offers a flexible curriculum that allows students to tailor their degree to their career goals and interests, with options for concentrations in business, education, health care, and more.'
  },
  
  'Interior Architecture': {
    title: 'Interior Architecture',
    description: 'This major focuses on the design of interior spaces, including topics such as space planning, color theory, lighting design, and building codes. Students learn how to use computer-aided design (CAD) software, as well as how to work with clients, contractors, and other professionals in the construction and design industry.'
  },
  
  'International Business Studies': {
    title: 'International Business Studies',
    description: 'This major focuses on the study of business operations in a global context, including topics such as international trade, marketing, finance, and management. Students learn about cultural differences and how they impact business practices, as well as how to navigate legal and regulatory environments in different countries.'
  },
  
  'Interpreting Deaf Education and Advocacy Services': {
    title: 'Interpreting Deaf Education and Advocacy Services',
    description: 'This major focuses on the study of American Sign Language (ASL) and the role of interpreters in facilitating communication between deaf and hearing individuals. Students learn about the cultural and linguistic aspects of deafness, as well as how to work with deaf individuals in educational and professional settings.'
  },
  
  'Kinesiology': {
    title: 'Kinesiology',
    description: 'This major focuses on the study of human movement and physical activity, including topics such as exercise physiology, motor control, biomechanics, and sport psychology. Students learn how to design and implement exercise and rehabilitation programs, as well as how to apply scientific principles to enhance athletic performance and prevent injury.'
  },
  'Marketing': {
    title: 'Marketing',
    description: 'This major focuses on the study of marketing strategies and tactics, including topics such as consumer behavior, market research, advertising, and sales. Students learn how to create and implement marketing plans for products and services, as well as how to analyze market trends and customer preferences.'
  },
  
  'Middle Grades Education': {
    title: 'Middle Grades Education',
    description: 'This major prepares students to become teachers of grades 6-9, with options for concentrations in English/language arts, mathematics, science, and social studies. Students learn how to create engaging lesson plans and assessments, as well as how to manage classroom behavior and work with parents and other stakeholders.'
  },
  
  'Music': {
    title: 'Music',
    description: 'This major focuses on the study of music theory, history, performance, and composition, with options for concentrations in instrumental or vocal performance, music education, or music technology. Students learn how to read and write music, as well as how to perform and teach music in a variety of settings.'
  },
  
  'Nursing': {
    title: 'Nursing',
    description: 'This major prepares students to become registered nurses (RNs), with a curriculum that includes coursework in anatomy, physiology, pharmacology, and nursing practice. Students also gain clinical experience in a variety of healthcare settings, working under the supervision of licensed nurses and other healthcare professionals.'
  },
  
  'Nutrition': {
    title: 'Nutrition',
    description: 'This major focuses on the study of human nutrition and its relationship to health and disease, including topics such as nutrient metabolism, dietary analysis, and nutrition counseling. Students learn how to design and implement nutrition plans for individuals and groups, as well as how to conduct research in the field of nutrition.'
  },
  'Performance': {
    title: 'Performance',
    description: 'This major focuses on the study of performance in various artistic disciplines, such as music, theatre, dance, and visual arts. Students learn how to analyze and critique performances, as well as how to create and perform their own works in their chosen medium.'
  },
  
  'Physical Education Teacher Education (K-12)': {
    title: 'Physical Education Teacher Education (K-12)',
    description: 'This major prepares students to become physical education teachers for grades K-12, with a curriculum that includes coursework in human anatomy and physiology, motor development and learning, and teaching methods for physical education. Students also gain practical experience through teaching and coaching in schools and other settings.'
  },
  
  'Physics': {
    title: 'Physics',
    description: 'This major focuses on the study of matter, energy, and their interactions, including topics such as mechanics, electromagnetism, thermodynamics, and quantum mechanics. Students learn how to use mathematical models to describe and predict physical phenomena, as well as how to design and conduct experiments to test these models.'
  },
  
  'Public Health Education': {
    title: 'Public Health Education',
    description: 'This major focuses on the study of public health issues and strategies for improving the health of populations, including topics such as epidemiology, health behavior theory, health policy, and community health promotion. Students learn how to design and implement health education programs and interventions, as well as how to conduct research in the field of public health.'
  },
  'Social Work': {
    title: 'Social Work',
    description: 'This major prepares students for careers in social work, with a curriculum that covers social welfare policy, human behavior and the social environment, social work practice methods, and research. Students gain hands-on experience through field placements and internships in social work agencies and organizations.'
  },
  
  'Sociology': {
    title: 'Sociology',
    description: 'This major focuses on the study of human society and social behavior, including topics such as social inequality, culture, deviance, and social change. Students learn how to use sociological theories and methods to analyze and understand social phenomena, as well as how to conduct research and gather data in the field of sociology.'
  },
  
  'Special Education: General Curriculum': {
    title: 'Special Education: General Curriculum',
    description: 'This major prepares students to become special education teachers for students with disabilities in grades K-12. Students learn about the characteristics and needs of students with disabilities, as well as effective instructional strategies and assessment methods for teaching in inclusive classroom settings.'
  },
  
  'Studio Art': {
    title: 'Studio Art',
    description: 'This major focuses on the development of artistic skills and techniques, as well as the exploration of concepts and themes in various artistic mediums, such as painting, drawing, sculpture, and photography. Students have the opportunity to create and exhibit their own works, as well as to study the works of other artists and art movements.'
  }
};

function getResults() {
  return new Promise((resolve) => {
    fetch("../php/get_results.php")
      .then((response) => response.json())
      .then((resultData) => {
        for (const result of resultData) {
          if (result.score > 0) {
            labels.push(result.feature_name);
            scores.push(result.score);
          }
        }
        // keys.forEach((key, i) => labels[key] = scores[i]);

        sendData();
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
}

function sendData() {
  var result = labels.map((feature, i) => ({ feature, index: scores[i] }));

  fetch("http://localhost:5000/api", {
    method: "POST",
    body: JSON.stringify(result),
    headers: { "Content-Type": "application/json" },
  })
    .then((response) => response.json())
    .then((data) => {
      displayMajorInfo(data.message);
      console.log(data.message);
    })
    .catch((error) => console.error(error));
}

function displayMajorInfo(major) {
  let majorString = major.replace(/[\[\]']+/g, '');
  const majorInfo = majors[majorString];
  if (!majorInfo) {
    console.log(`Sorry, we don't have information about the ${major} major.`);
    return;
  }
  else{
    majorTitle.innerText = majorInfo.title;
    majorText.innerText = majorInfo.description;
  }
}

getResults();
