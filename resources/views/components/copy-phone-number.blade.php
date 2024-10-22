<div class="flex items-center ml-1">
    <div id="{{ $id }}">{{ $slot }}</div>
    <button onclick="copyToClipboard('{{ $id }}')" class="p-1 rounded-full hover:bg-gray-100 focus:outline-none mx-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
    </button>
</div>
<script>
    function copyToClipboard(elementId) {
        // Create an auxiliary hidden input
        var aux = document.createElement("input");
        // Get the text from the element passed into the input
        aux.setAttribute("value", document.getElementById(elementId).innerHTML);
        // Append the aux input to the body
        document.body.appendChild(aux);
        // Highlight the content
        aux.select();
        // Execute the copy command
        document.execCommand("copy");
        // Remove the input from the body
        document.body.removeChild(aux);
	}
	</script>