@extends('layouts.app')

@section('title', 'Cookies Policy')

@section('content')
<div class="container">
    <div class="policy-container">
        <h1 class="text-center policy-title">Cookies Policy</h1>
        <p class="text-muted text-center last-updated">Last updated: [August 2024]</p>
        
        <div class="policy-content">
            <p>VGRS ("us", "we", or "our") uses cookies and similar technologies to recognize you when you visit our website.</p>
            
            <h2>What Are Cookies?</h2>
            <p>Cookies are small data files placed on your device when you visit a website, allowing the website to recognize your device and store information about your preferences or past actions.</p>

            <h2>How We Use Cookies</h2>
            <ul>
                <li><strong>Essential Cookies:</strong> Necessary for the website to function.</li>
                <li><strong>Performance Cookies:</strong> Help us understand how visitors interact with our site.</li>
                <li><strong>Functional Cookies:</strong> Enable enhanced functionality and personalization.</li>
            </ul>

            <h2>Your Choices Regarding Cookies</h2>
            <p>You can manage your cookie preferences through your browser settings. Note that refusing cookies may affect your experience on our website.</p>

            <h2>Changes to This Cookies Policy</h2>
            <p>We may update our Cookies Policy periodically. Changes will be posted on this page.</p>

            <h2>Contact Us</h2>
            <p>If you have questions about this Cookies Policy, please contact us at <a href="mailto:support@vgrs.com">support@vgrs.com</a>.</p>
        </div>
    </div>
</div>

<style>
    .policy-container {
        background-color: #000000; /* Black color */
        padding: 20px;
        border-radius: 8px; /* Rounded corners */
        max-width: 600px; /* Set a maximum width */
        margin: 20px auto; /* Center the container */
    }
    .policy-title {
        color: #ffd700; /* Gold color for the title */
        font-weight: bold; /* Make the title bold */
        margin-top: 0; /* Remove default margin */
    }
    .last-updated {
        color: #ffffff; /* White color for last updated text */
        margin-bottom: 20px; /* Add some space below the text */
    }
    .policy-content {
        line-height: 1.6;
        color: #ffffff; /* White text */
    }
    h2 {
        color: #ffd700; /* Gold color for headings */
        margin-top: 20px;
    }
    ul {
        list-style-type: disc;
        margin-left: 20px;
    }
</style>
@endsection
