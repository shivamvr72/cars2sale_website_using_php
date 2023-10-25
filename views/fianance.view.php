<?php include "header.view.php" ?>

<style>
    body {
        background-color: #f7f7f7;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: white;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 36px;
        color: #4B0082;
    }

    p, ul {
        margin: 20px 0;
        padding: 0 20px;
        font-size: 18px;
        text-align: center;
    }

    ul {
        list-style-type: disc;
    }

    .finance-button {
        background-color: #4B0082; 
        color: white;
        border: none;
        border-radius: 8px;
        padding: 15px 30px;
        text-align: center;
        cursor: pointer;
        display: block;
        margin: 30px auto;
        font-size: 24px;
    }

    .finance-button a {
        color: white;
        text-decoration: none;
    }

    .finance-button:hover {
        background-color: #800080; 
    }
</style>

<div class="container">
    <h1>Finance Solutions</h1>
    <p>Get the financial assistance you need to make your dream car a reality. Our finance options are tailored to suit your needs, with competitive rates and flexible terms. Whether you're looking for a new car loan or refinancing, we've got you covered.</p>

    <h2>Why Choose Our Finance Services?</h2>
    <ul>
        <li>Competitive Interest Rates</li>
        <li>Flexible Payment Options</li>
        <li>Quick and Easy Approval Process</li>
        <li>Experienced Financial Advisors</li>
        <li>Customized Solutions for Your Needs</li>
    </ul>

    <h2>Car Finance Options</h2>
    <p>Our car finance solutions include:</p>
    <ul>
        <li>New Car Loans</li>
        <li>Used Car Loans</li>
        <li>Refinancing Options</li>
        <li>Leasing and Rental Plans</li>
        <li>Extended Warranties and Insurance</li>
    </ul>

    <h2>Apply for Finance</h2>
    <p>Ready to take the next step? Apply for finance today and take one step closer to driving your dream car. Our experienced financial advisors are here to help you with the application process and answer any questions you may have.</p>

    <button class="finance-button"><a href="fiananceform.view.php">Apply for Finance</a></button>
</div>
