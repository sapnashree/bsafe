<?php $currentPage = 'service'; include('header.php');?>
<style>
    .container_1{
        padding:60px;
        background: url(img/security-banner.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
    .flex-container {
        display: flex;
    padding: 20px;
    }
h2{
    color: #2a2a2a;
    text-align: center;
    text-transform: uppercase;
}
    .flex-item {
        text-align: center;
    margin: 10px;
    width: 25%;
    box-sizing: border-box;
    background: #008dd2;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    height: 95px;
    }
    .lis_name{
        margin-top: 10px;
    font-size: .9rem;
    text-transform: capitalize;
    background: grey;
    color: white;
    /* height: 45px; */
    font-weight: 300;
    padding: 10px;
    }
.line_lgao{
    position: relative;
    height: 3px;
    width: 8%;
    background: grey;
    left: 46%;
    margin-bottom: 10px;
}
/* p{
    color:#2f2e2c;
} */
.icon_n{
    color: white;
    font-size:35px;padding: 10px ;
}
    .description {
        text-align: justify;
    color: #4e4f52;
    background: white;
    padding: 40px;
    margin-left: 26px;
    margin-right: 26px 
    }
    ul, li{
        text-align:justify;color: #4e4f52;
    }
    .client_image {
    flex: 1;
    max-width: 50%;
    height: auto;
}
.clientss{
    display:flex;
}
.client_tag {
    flex: 1;
    max-width: 90%;
   
    padding: 20px;font-size: 3rem;
}
.selected {
    background-color: #ef7f1b;
}
    .arrow {
        position: relative;
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #ef7f1b;
    top: -4%;
    left: 45%;
    transform: rotate(180deg);
}

.client_tag2 {
    text-align: justify;
    padding: 20px;width: 90%;
}
@media (max-width: 767px) {
   .clientss {
       display: flex;
       flex-direction: column;
   }
   .client_image {
    flex: 1;
    max-width: 100%;
    height: auto;
}
.flex-item {
    text-align: center;
    margin: 10px;
    width: 100%;
    box-sizing: border-box;
    padding: 10px;
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
.lis_name {margin-top: 4px;
    font-size: .9rem;
    text-transform: capitalize;
    background: grey;
    color: white;
    /* height: 45px; */
    font-weight: 300;
    padding: 5px;
    margin-left: -10px;
    width: 253px;
}
.arrow{
    display:none
}
.description {
    text-align: justify;
    color: #4e4f52;
    background: white;
    padding: 30px;
    margin-left: 0px;
    margin-right: 0px;
    width: 100%;
}


}
</style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Services</h1>
        </div>
    </div>
    <!-- Page Header End -->
     <!-- Service Start -->

     <div class="container_1">
          <h1 class="text-center" style="color:#2f302f;text-transform:uppercase;">Services</h1>
          <p class="mb-4" style="color:#4f504f">Embark on a journey of unmatched convenience with our diverse range of services. From recruitment solutions to legal counsel, we're dedicated to fulfilling all your needs under one roof. Experience the ease of streamlined excellence as we cater to every aspect with precision and care. Your satisfaction is our priority, and our commitment to quality shines through in every service we provide.</p>
       <div class="row">
        <div class=" flex-part">
            <div class="flex-container">
                <div class="flex-item" onclick="showDescription('1', this)" data-description="1">
                <i class="fas fa-user-tie  icon_n"></i>
                    <h4 class="lis_name">Recruitment Services</h4>
                </div>
                <div class="flex-item" onclick="showDescription('2', this)" data-description="2">
                <i class="fas fa-briefcase  icon_n"></i> 
                    <h4 class="lis_name">Third Party Staffing</h4>
                </div>
                <div class="flex-item" onclick="showDescription('3', this)" data-description="3">
                <i class="fas fa-shield-alt  icon_n"></i>
                    <h4 class="lis_name">Security Services</h4>
                </div>
                <div class="flex-item" onclick="showDescription('4', this)" data-description="4">
                <i class="fas fa-certificate  icon_n"></i>
                    <h4 class="lis_name">Factory License </h4>
                </div>
                <div class="flex-item" onclick="showDescription('5', this)" data-description="5">
                <i class="fas fa-balance-scale  icon_n"></i>
                    <h4 class="lis_name">Labour Law Consultant</h4>
                </div>
                <div class="flex-item" onclick="showDescription('6', this)" data-description="6">
                <i class="fas fa-user-tie icon_n "></i>
                    <h4 class="lis_name">HR <br>Consultant</h4>
                </div>
                <div class="flex-item" onclick="showDescription('7', this)" data-description="7">
                <i class="fas fa-money-check icon_n"></i>
                    <h4 class="lis_name">Payroll Services</h4>
                </div>
                <div class="flex-item" onclick="showDescription('8', this)" data-description="8">
                <i class="fas fa-gavel icon_n"></i>
                    <h4 class="lis_name">Statotory Compliances</h4>
                </div>
                <div class="flex-item" onclick="showDescription('9', this)" data-description="9">
                <i class="fas fa-graduation-cap icon_n"></i>
                    <h4 class="lis_name">Training & Development</h4>
                </div>
                <div class="flex-item" onclick="showDescription('11', this)" data-description="11">
                <i class="fas fa-id-card icon_n"></i>
                    <h4 class="lis_name">MPCB <br>License</h4>
                </div>
            </div>
        </div>
        <div class=" flex-part">
            <div class="description" id="1">
                <h2>Recruitment Services</h2>
                <div class="line_lgao"></div>
                <p>If you are currently involved in the choice of professionals, who are looking for advice on what the trends in recruitment, which is as you want, or just get some information on expected salary rates, we can help you out. The B-SAFE is a leading professional recruitment consultancy specialising in the range of permanent, contract and interim data from the leading companies. <br><br>How, our service will show that more than 90% of our current activities are for destinations, and customers. The formula for running a successful business is keeping employees happy and satisfied. This requires that the letterhead are able to maintain an impeccable and timely employee pay schedule. In addition, the companies are also required to comply with all the statutory laws, in order to avoid any discrepancies. Outsourcing, therefore, it will help you to save the data without any errors, as well as to gain a better understanding of the company and the achievement of all your goals in a timely manner or in the past.</p>
            </div>
            <div class="description" id="2">
                <h2>Third Party Staffing</h2> <div class="line_lgao"></div>
                <p>We will maintain records of all services, and keep an adequate emergency entrance, and to the comprehensive hygiene of the controls. We provide excellent quality results with these best practices, equipment, supplies, and support staff to engage with general cleaning. <br>Expro does not accept unsolicited resumes from employers, employment agencies, or any organization or personnel. The absence of a signed framework agreement on the Expro-the service will not be taken into account, and the confirmation of the payment by the hiring manager's remuneration, or any referral compensation, will not be taken into account. In the event a recruiter or agency submits a resume or candidate without a previously signed agreement, Expro Team reserves the right to pursue and hire candidates without any financial responsibility to the recruiter or agency.</p>
            </div>
            <div class="description" id="3">
                <h2>Security services</h2> <div class="line_lgao"></div>
                <p>Security services are an important part of keeping people safe in public places. Whether you are at school, in an office building, or in a shopping mall, security guards have a duty to keep each day running smoothly and safely. Although they are often compared to police officers, it is important to know that there is a difference between the two. Both are important for the well-being of the people in these large, busy areas. <br>Security services we provide:- All types of Industrial & Personal Security/Guards Services,Gun Man services/ Bouncer Services,Hospital security & Service , Security of Residential Apartment, Security of commercial Establishments, Armed Escorts ,Security of Housing Complex, BPO's and IT Companies ,Bank Security Retail Security ,Hotel Security</p>
            </div>
            <div class="description" id="4">
                <h2>Factory License</h2> <div class="line_lgao"></div>
                <p>
                    <ul>Obtaining a factory license is beneficial for all employees working at these facilities because it ensures the safety and well-being of these workers. Some of these benefits include;
                        <li> <b>Legal Benefits: </b><br> The owner of the firm will be able to access the legal benefits provided by the government, depending on the program.</li>
                        <li> <b> Specified Employee Terms: </b><br>Women and junior workers are provided with a minimum wage, health and safety, working conditions and the number of hours worked</li>
                        <li> <b>Product Development: </b><br>Compliance under the guidelines set by the Factories Act 1948 continues to improve the productivity of all employees</li>
                    </ul></p>
            </div>
            <div class="description" id="5">
                 <h2>Labour Law Consultant</h2> <div class="line_lgao"></div>
                <p>he B-SAFE is a registered company, which provides Consulting services regarding employment law issues for clients. We offer a wide range of services, material and technical support, along with the advice, and the reports of the labour code, in order to comply with certain requirements of the Labor law, and of the various labour laws. We have a team of highly experienced and dedicated employment law Consultants, Legal Consultants, compliance managers, and Partners with long experience in this field, make sure that each and every customer fully complying with the various labor laws. We offer a wide range of services and access to the support, the advice and opinions given in work, in order to establish their rights, and some of the enforcement of the labor laws, the various labour laws rules. We have a team of Dedicated lawyers, Legal Consultants, compliance managers, and a senior partner in this field, in order to ensure full compatibility with the Various labor laws, for any of the customers. <br>Our work area is well-equipped with sophisticated software that delivers fast and high-quality products. Our goal is to provide our customers with better services, making it possible for them to achieve economies of scale by reducing costs.</p>
            </div>
            <div class="description" id="6">
               <h2>Human Resources Consultants </h2> <div class="line_lgao"></div>
                <p>Human resources consultants in the control of the organization's human resources is in the best interests of the company. By creating and developing a human resources model specific to the organizations that are working on them, the HR consultants to ensure that the company is efficiently using its own staff in order to achieve their goals, as well as to those of its employees, in order to work at a high-level of productivity and efficiency.The work of the consultants on the track, at the same time, the financial organizations to ensure the interests of the company. By creating and developing a human resources model specific to their employer, the work of the consultants, in order to ensure that the company in an effective way, the use of the employees to achieve their goals, as well as to ensure a high level of employee productivity and efficiency.</p>
            </div>
            <div class="description" id="7">
                <h2>Payroll Services</h2> <div class="line_lgao"></div>
                <p>When you want to go out with the mentality of just giving the salary to the employees, Payroll services can bring your business ideas and to help you focus on what you're good at-running your business. Our payroll management services, is an opportunity to improve the human resources management to a higher level. <br>One of India's leading payroll providers, we understand the what, how much it costs, it's important to your organization, in order to provide error-free payroll management. With the help of our extensive range of services that your organization is able to make a prompt and accurate payroll process. <br>Here are a few of the payroll services we offer: <br>Employee Self-service (ESS): the Online technology, in order for agents to keep a paycheck, to be applied to the explanation of FBP resolution, send a request.
                <ol>
                        <li>This Online, view / print the payroll receipts.</li>
                        <li>Automated software has never been, a Permit to Import/Export, exit.</li>
                        <li>The Web-based vacation solution.</li>
                        <li>Cost Management.</li>
                        <li> Replace-Excel to Web-based</li>
                        <li>The processing of Salaries, Wages, Costs, expenses, F&F, Generation after Generation, Reporting, E-challan As a trusted outsourcing company, we can provide you with a better and more efficient payroll process of your organization.</li>
                       

                    </ol></p>
            </p>
            </div>
            <div class="description" id="8">
                <h2>Statotory Compliances</h2> <div class="line_lgao"></div>
                <p>Compliance With The Provisions Of Law-A Complete Guide A lot of time, effort, and money in your organization, and it is shown that, in order to ensure the salary is in accordance with the requirement of compulsory audit of the accounts. Fair treatment of employees in the workplace that protect the company from excessive wages, or benefits, of the trade unions, and / or aggressively employees, the company was faced with concerns about the potential legal issues related to compliance. However, it is possible that the company never intended to be in violation of these laws, however, without the necessary protection, it can be easy to slip through the cracks. <br>The complexity of doing business has grown tremendously and it has been very difficult to sync up with the operational aspect of the business. As mentioned above, organizations turn to the help of regulatory compliance experts, whose primary goal is to satisfy the demands of an ever-changing regulatory framework. In addition, many companies are also providing regulatory, compliance, and management services, and a better understanding of the regulatory framework, and provides specialized services to the organizations. To simplify the process, from the everyday to the implementation of any specific terms and reyestrlərinin to the submission, including, among other thing</p>
            </div>
            <div class="description" id="9">
                <h2>Training & Development</h2> <div class="line_lgao"></div>
                <p>Training and Development are operations of a company that was created in order to raise the level of knowledge and competence of the employees, at the same time, it provides the information and instructions on how to accomplish specific tasks. Learning is a short-term process, which is dedicated to the environment and natural resources, at the same time as the development is an ongoing, active process, which is intended for senior managers. When the staff training, the goal is to develop new skills, and at the same time the development of a holistic personality. <br>During the training process, the executive team will take the initiative to meet the employee's needs. In the process of developing an initiative of the individual's income is used to meet the future needs of the workforce. For training purposes, it has been used in organizations for the past few decades. Training and development requires investments of many types of education and training, and the development of the integration has some benefits for the organization:
                <ol>
                    <li>To increase the productivity of labor</li>
                    <li> To develop the skills</li>
                    <li>Team Lead</li>
                    <li>To reduce the number of accidents that are related to the safety of the flight</li>

                </ol></p>
            </div>
          
            <div class="description" id="11">
                <h2>MPCB License</h2> <div class="line_lgao"></div>
                <p>Mainly include the Water Prevention and Control of Pollution Act, 1974, the Air (Prevention and Control of Pollution) Act, 1981, Water Act, 1977. The MPCB operates under the administrative control of the Maharashtra State Department of Environmental Affairs. The MPCB is the main regulator of Environmental Law Enforcement and Pollution Control, plays a key role in achieving sustainable development by enforcing various laws, regulations, regulatory notices etc. Concerning pollution prevention and control.</p>
            </div>
        </div>

    </div>
 </div>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.description').forEach((desc, index) => {
            desc.style.display = index === 0 ? 'block' : 'none';
        });
    });

    function showDescription(descriptionId, element) {
        document.querySelectorAll('.description').forEach(desc => {
            desc.style.display = 'none';
        });

        document.querySelectorAll('.flex-item').forEach(item => {
            item.classList.remove('selected');
            // Remove arrow elements from previous selections
            item.querySelectorAll('.arrow').forEach(arrow => {
                arrow.remove();
            });
        });

        document.getElementById(descriptionId).style.display = 'block';

        if (element && element.classList) {
            // Add 'selected' class to the clicked flex-item
            element.classList.add('selected');

            // Create and append the arrow element below the selected item
            const arrow = document.createElement('div');
            arrow.className = 'arrow';

            // Append the arrow to the selected item's container
            element.appendChild(arrow);
        }
    }
</script> -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Select the first flex item and trigger a click event to show its description
        const firstFlexItem = document.querySelector('.flex-item');
        if (firstFlexItem) {
            firstFlexItem.click();
        }
    });

    function showDescription(descriptionId, element) {
        document.querySelectorAll('.description').forEach(desc => {
            desc.style.display = 'none';
        });

        document.querySelectorAll('.flex-item').forEach(item => {
            item.classList.remove('selected');
            // Remove arrow elements from previous selections
            item.querySelectorAll('.arrow').forEach(arrow => {
                arrow.remove();
            });
        });

        document.getElementById(descriptionId).style.display = 'block';

        if (element && element.classList) {
            // Add 'selected' class to the clicked flex-item
            element.classList.add('selected');

            // Create and append the arrow element below the selected item
            const arrow = document.createElement('div');
            arrow.className = 'arrow';

            // Append the arrow to the selected item's container
            element.appendChild(arrow);
        }
    }
</script>

















<?php include('footer.php');?>
 