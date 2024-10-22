@extends('layouts.app')

@section('title', 'Legal Terms')

@section('content')
<div class="container">
    <div class="policy-container">
        <h1 class="text-center policy-title">Legal Terms</h1>
        <p class="text-muted text-center last-updated">Last updated: [August 2024]</p>
        
        <div class="policy-content">
            <p>These Legal Terms govern your use of our website and services. By accessing or using our services, you agree to be bound by these terms.</p>

            <h2>Intellectual Property</h2>
            <p>All content, trademarks, and other intellectual property on our website are owned by or licensed to VGRS. Unauthorized use is prohibited.</p>

            <h2>Limitation of Liability</h2>
            <p>VGRS is not liable for any damages arising from your use of the website or services. Use is at your own risk.</p>

            <h2>Changes to These Terms</h2>
            <p>We may update these Legal Terms periodically. Changes will be posted on this page.</p>

            <h2>Contact Us</h2>
            <p>If you have questions about these Legal Terms, please contact us at <a href="mailto:support@vgrs.com">support@vgrs.com</a>.</p>
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
</style>
@endsection
