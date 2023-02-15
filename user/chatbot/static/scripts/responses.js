function getBotResponse(input) {
    input = input.toLowerCase();
    if ((input.includes("what is khelo"))||(input.includes("moto"))||(input.includes("objective"))) 
    {
        return "Khelo India Programme is a national yojana/scheme for the development of sports in India. It was launched in the year 2018 by the then Sports Minister Col. Rajyavardhan Singh Rathore in Delhi. This program has been launched to improve the sports culture in India.";
    } 
    else if (input.includes("special")||(input.includes("training"))) 
    {
        return "Sports persons under khelo india scheme are given special focus and training in various places across India <br> For further details: <a href='https://pib.gov.in/PressReleaseIframePage.aspx?PRID=1845123' >Click here.</a>";
    }
    else if (input.includes("scope")||(input.includes("future"))||(input.includes("opportunity"))||(input.includes("chance"))) 
    {
        return "1) Players selected will be provided annual financial assistance of INR 5 lakh per annum for 8 years !<br>2) 20 million children of the age group of 10 to 18 years will be included in the National Physical Fitness Campaign.<br>3) The government also promised to promote 20 universities across India as hubs for sporting excellence.<br><br>For further details <a href='https://samajho.com/upsc/khelo-india-programme/'>click here</a>";
    }
    else if (input.includes("money")||(input.includes("cash"))||(input.includes("amount"))||(input.includes("rupee"))||(input.includes("fund"))||(input.includes("note"))||(input.includes("bucks"))||(input.includes("pay"))||(input.includes("package"))||(input.includes("stipend"))||(input.includes("salary"))) 
    {
        return "Players selected will be provided annual financial assistance of INR 5 lakh per annum for 8 years under this scheme<br><br>The money will be credited to the bank account with the help of the details provided during the registration process !";
    }
    else if (input.includes("register")||(input.includes("apply"))||(input.includes("enroll"))||(input.includes("enter"))||(input.includes("login"))||(input.includes("submit"))||(input.includes("participate"))) 
    {
        return "<iframe width='250' height='200' src='https://www.youtube.com/embed/r5s98I-g7JI' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
    }
    else if (input.includes("contact")||(input.includes("report"))||(input.includes("authority"))||(input.includes("officer"))||(input.includes("officials"))||(input.includes("staff"))||(input.includes("person"))||(input.includes("whom"))) 
    {
        return "Contact Details :<br>Helpline Number(Toll-Free) : <br>1800-202-5155,1800-258-5155<br><br>Working Days : Monday to Friday<br>Working Time : 9.00 AM to 5.30 PM";
    }
    else if (input.includes("main")||(input.includes("head"))||(input.includes("location"))||(input.includes("place"))||(input.includes("centre"))||(input.includes("center"))||(input.includes("where"))) 
    {
        return "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5942018.179664199!2d69.98707772684774!3d24.633331790741273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2f931835ac1%3A0xe53de68507f26b47!2sSPORTS%20AUTHORITY%20OF%20INDIA!5e0!3m2!1sen!2sin!4v1659274730866!5m2!1sen!2sin' width='250' height='200' allowfullscreen></iframe>";
    }
    else if((input.includes("when"))||(input.includes("long"))||(input.includes("wait"))||(input.includes("take"))||(input.includes("process"))){
        return "The Khelo India registration process takes more than 20days to process since all the provided documents and details must be verified and checked !"
    }
    else if((input.includes("eligib"))||(input.includes("require"))||(input.includes("permit"))||(input.includes("entitled"))||(input.includes("allow"))||(input.includes("qualif"))||(input.includes("suit"))||(input.includes("accepted"))||(input.includes("worth")))
    {
        return "1) Candidates must be a resident of India.<br>2) The applicant must be studying in school or college.<br>3) Candidates applying for the “Under 17 Category” must be less than 17 years old.<br>4) Applicants applying for the “Under 21 Category” must be less than 21 years old.<br>5) Applicants must be interested in and good in sports.<br>6) The applicants should have good knowledge of sports."
    }
    else if((input.includes("fee")))
    {
        return "The whole registration process is free of cost and there is no need to pay any fee for registration purposes<br>If any government authority is asking for registration fees,<br><br>Please complaint : <br>Helpline Number(Toll-Free) : <br>1800-202-5155,1800-258-5155<br><br>Working Days : Monday to Friday<br>Working Time : 9.00 AM to 5.30 PM"
    }
    else if((input.includes("age"))||(input.includes("catego"))||(input.includes("group"))||(input.includes("set"))||(input.includes("kind"))||(input.includes("genre"))||(input.includes("department"))||(input.includes("division"))||(input.includes("section"))||(input.includes("grade")))
    {
        return "There are two categories for enrolling in khelo India scheme<br><br>1) Under 18<br>2) Under 21";
    }
    else if((input.includes("how many"))||(input.includes("selected")))
    {
        return "A total of 1000 kids are selected for khelo india scheme !";
    }
    else if((input.includes("change"))&&(input.includes("password"))){
        return "Go to the <a href='https://nsrs.kheloindia.gov.in/#'>login page</a> and give forget password to change your existing password !!";
    }
    else if((input.includes("profile"))||(input.includes("pic"))||(input.includes("photo"))||(input.includes("image")))
    {
        return "The profile picture once uploaded is final and it cannot be updated to prevent confusions !!";
    }
    else if((input.includes("terms"))||(input.includes("conditions"))||(input.includes("privacy"))||(input.includes("policy"))||((input.includes("t&c")))||((input.includes("rights"))))
    {
        return "Terms and conditions are specified in the below link<br><br><a href='https://nsrs.kheloindia.gov.in/Content/website_pdf/term_and_usage.pdf'>https://nsrs.kheloindia.gov.in/Content/<br>website_pdf/term_and_usage.pdf</a>";
    }
    else if ((input.includes("sports"))) 
    {
        return "There are 20 sports disciplines in Khelo India Youth Games 2020<br> archery <br> cycling<br> kabaddi<br> table tennis<br> athletics<br> football<br> kho-kho<br> tennis<br> badmiton<br> field hockey<br> lawn bowling<br> volley ball<br> basketball<br> gymnastics<br> shooting<br> weightlifting<br> boxing<br> judo<br> swimming<br> wrestling";
    }
    else if((input.includes("sai")))
    {
        return "The Sports Authority of India (SAI) is the apex national sports body of India, established in 1982 by the Ministry of Youth Affairs and Sports of Government of India for the development of sports in India. ";
    }
    else if((input.includes("who are u"))||(input.includes("who r u"))||(input.includes("who are you"))||(input.includes("who r you")))
    {
        return "I am a bot assigned to assist and guide you through the registration process !";
    }
    else if((input.includes("human"))||(input.includes("bot")))
    {
        return "I am a chat bot !";
    }
    else if((input.includes("how are u"))||(input.includes("how r u"))||(input.includes("how are you"))||(input.includes("how r you")))
    {
        return "I am fine !!";
    }
    else if((input.includes("hi"))||(input.includes("hello")))
    {
        return "Hi ! How may I  you !";
    }
    else if((input.includes("bye"))||(input.includes("see ya")))
    {
        return "Bye bye !";
    }
    else if((input.includes("funded"))||(input.includes("types of infrastructure funded"))||(input.includes("infrastructures funded"))||(input.includes("types of infrastructure"))||((input.includes("infrastructure scheme")))||((input.includes("fund scheme"))))
    {
        return " 1.supports for Greenfield and brownfield projects to support exsisting demands.<br>2.Projects will also be judged on their potential by encouraging participation of females, persons with disabilities <br>3.Areas which have experienced natural disasters, and with strong demand for sports facilities due to popularity of one or more sports disciplines or strong  population growth or significant change in circumstances (e.g. economic challenges)<br>4.Individual component(s) such as stadia, sports complexes, etc.,<br>5.Projects on land belonging to schools, colleges, Universities and other educational institutions<br>6.Project management fees of up to 5 per cent of the total project cost ";
    }
    else if((input.includes("what will not be funded"))||(input.includes("what fundings are not provided"))||(input.includes("fundings not provided")))
    {
        return "1.projects that do not strongly meet the assessment/eligibility criteria/that doesn't meet relevant standards <br>2.projects that do not align with the objectives of the program<br>3.where the applicant(s) have previously availed of grants from the Government of India<br>4.facilities where little or no public access is available<br>5.routine or cyclical maintenance works<br>6.purchasing or maintaining recreation, entertainment, sporting, life-saving or any other equipment (except as part of facility fit out)<br>7.Exceptional circumstances may be considered where a safety standard or compliance issue is evident";
    }
    else if((input.includes("does past performace reflect on future project"))||(input.includes("past performance"))||(input.includes("past performance reflection"))||(input.includes("past performance on future project"))||((input.includes("impact of past performance on future project"))))
    {
        return"Poor past performance of an applicant may result in rejection of project(s) of an applicant,";
    }
    else if((input.includes("eligibility for financial assistance"))||(input.includes("eligibility for financial aid"))||(input.includes("eligibility for finance")))
    {return"(i) University should either have reasonable sporting infrastructure in some of major disciplines in sports.<br>(ii)University should have a consistent track record in promotion of sports<br>(iii)University should have attained A grade accreditation by National Assessment Accreditation Council.<br>(iv)The staff availability in the form of sports coaches/trainers/managers, etc.should be clearly mentioned<br>(v)No money will be allocated without proper support of human resource for utilization of proposed sports infrastructure ";
    }
    else if((input.includes("what is DPAC"))||(input.includes("DPAC full form"))||(input.includes("dpac"))||(input.includes("DPAC"))||((input.includes("DPAC full form"))))
    {
        return "Departmental Project Approval Committee";
    }
    else if((input.includes("what is the approval process"))||(input.includes("approval process"))||(input.includes("Approval process")))
    {
        return "Grouping of States and Challenge Method";
    }
    else if((input.includes("selection process"))||(input.includes("candidate selection process")))
    {
    return" challenge is to be conducted amongst States/UTs that are similarly placed.";
    }
    else if((input.includes("members under dpac"))||(input.includes("members of dpac"))||(input.includes("dpac members")))
    {
        return "1.Secretary, Ministry of Youth Affairs & Sports, Department of Sports<br>2.Financial Adviser, Ministry of Youth Affairs & sports<br>3.Director General, Sports Authority of India (DG, SAI)<br>4.Joint Secretary in-charge<br>5.Representative of NITI Aayog";
    }
    else if((input.includes("duration of site selection process"))||(input.includes(" what is the duration of site selection process"))||(input.includes("site selection process"))||(input.includes("time taken for site selection")))
    {
        return"Three months";
    }
    else if((input.includes("Types of project funded"))||(input.includes("projects funded")))
    {
        return " 1.Synthetic Athletic Track  Rs. 7.00 crore<br>2.Synthetic Hockey field with lighting  Rs. 6.00 crore<br>3.Synthetic turf football ground with running track and lighting  Rs. 7.00 crore<br>4.Multipurpose Hall of size 60M x 40M x 12.5M with facilities for Badminton, Volleyball, Judo, Wrestling, Handball, Kabaddi, or any other priority sports discipline which is popular in the said University  Rs. 10.00 crore<br>5.Swimming Pool  Rs.8.00 crore<br>6.Setting up of Human Performance and Recovery Laborator  Rs.10.00 crore<br>";
    }
    else if((input.includes("customer care helpline number"))||(input.includes("helpline number"))||(input.includes("customer care number ")))
    {
        return " < a href='https://m.indiacustomercare.com/khelo-india-scheme-helpline-number-011-24367770'</a>";
    }
    else if((input.includes("what does khelo india mean"))||(input.includes("khelo india means")))
    {
        return"Lets play India";
    }
    else if((input.includes("maximum amount alloted for infrastructure"))||(input.includes("maximum infrastructure amount"))||(input.includes("infrastructure amount"))||(input.includes("limit of cost for project")))
    {
        return" Rs.50.0 cr";
    }
    else if((input.includes("can i avail more than the maximum amount?"))||(input.includes("more than maximum amount")))
    {
        return "It is not provided unless it meets the necessarry or given condition satisfied";
    }

    else if((input.includes("key points of khelo india"))||(input.includes("khelo india key points"))||(input.includes("key points on khelo india programme")))
    {
        return " 1.Play field Development<br>2.Support to National/ Regional/ State/ Sports Academics<br>3.Community Coaching Development<br>4.State Level Khelo India Centers<br>5.Physical of school children<br>6.Sports for women<br>7.Annual Sport Competition<br>8.Promotion of sports amongst people with disabilities<br>9.Talent search and development<br>10.Sports for Peace and Development<br>11.Utilization and Creation/ Upgradation of Sports Infrastructure<br>12.Promotion of rural and indigenous/ tribal games";
    }
    else if((input.includes("sports infrastructure application form"))||(input.includes("infrastructure form"))||(input.includes("application form"))||(input.includes("application form for sports infrastructure"))){
        return"<a href='https://drive.google.com/file/d/1iuoQaCAX1hwhZchpsLdtE-a7zBeS6aCm/view?usp=sharing'>application details</a>";
    }
    else{
       return "<a href=https://cse.google.com/cse?key=AIzaSyBHyRm5nbKQpVVhibGkdh5_2fYeNlT4maI&cx=3264eabf7c09d4f32&q="+input+">click</a>";
    }
}