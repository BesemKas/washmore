<!DOCTYPE html>
<html>
<head>
    <title>Redirecting to Payment</title>
</head>
<body>
    <form id="payment-request-form" action="{{ route('payment.request') }}" method="POST" style="display:none;">
        @csrf
        <input type="hidden" name="order_id" value="{{ $order->id }}">
    </form>
    <script>
        // Automatically submit the form to initiate the payment request
        document.getElementById('payment-request-form').submit();
    </script>
</body>
</html>
