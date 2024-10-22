@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="container">
    <div class="policy-container">
        <h1 class="text-center policy-title">Privacy Policy</h1>
        <p class="text-muted text-center last-updated">Last updated: [August 2024]</p>
        
        <div class="policy-content">
            <p>This Privacy Policy explains how VGRS ("us", "we", or "our") collects, uses, and protects your information when you visit our website.</p>

            <h2>Information We Collect</h2>
            <ul>
                <li><strong>Personal Information:</strong> Identifiable information such as name, email, etc.</li>
                <li><strong>Usage Data:</strong> Information on how you access and use our website.</li>
            </ul>

            <h2>How We Use Your Information</h2>
            <p>We may use your information for the following purposes:</p>
            <ul>
                <li>To provide and maintain our services.</li>
                <li>To improve our website and services.</li>
                <li>To communicate with you and provide customer support.</li>
            </ul>

            <h2>Data Security</h2>
            <p>We take reasonable measures to protect your information, but no method of transmission is 100% secure.</p>

            <h2>Changes to This Privacy Policy</h2>
            <p>We may update our Privacy Policy periodically. Changes will be posted on this page.</p>

            <h2>Contact Us</h2>
            <p>If you have questions about this Privacy Policy, please contact us at <a href="mailto:support@vgrs.com">support@vgrs.com</a>.</p>
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
