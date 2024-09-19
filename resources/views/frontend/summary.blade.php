<x-frontend.layouts.master>
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center mr-1">
                <div class="dropdown dropdown-inline d-inline-block d-lg-none ml-2 mr-4">
                    <a href="#" class="px-2 px-lg-5 mr-2" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </a>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                        <ul class="navi navi-hover">
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">Chat Experience</span>
                            </li>
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">Custom Instruction</span>
                            </li>
                            <li class="navi-header font-weight-bold py-4" id="resetChatSection">
                                <span class="font-size-lg">Reset Chat</span>
                            </li>
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">Share Chat</span>
                            </li>
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">Export Chat</span>
                            </li>
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg text-danger">Delete Chat</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3" id="chat-title"
                        data-placement="bottom" data-toggle="tooltip" title="" aria-haspopup="true">
                    </h2>
                </div>
            </div>
            <div class="d-flex align-items-center flex-wrap">
                @if (auth()->user())
                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left"
                        data-original-title="Quick actions">
                        <a href="#" class="px-2 px-lg-5 mr-2" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="symbol symbol-35px symbol-md-40px" style="border-radius: 50%;"
                                src="{{ asset('assets') }}/media/users/100_12.jpg" alt="user" width="50"
                                height="50" />
                        </a>
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover">
                                <li class="navi-header font-weight-bold py-4">
                                    <div
                                        class="user-identity d-sm-flex flex-column justify-content-center me-2 me-md-4">
                                        <span class="fs-8 fw-bold lh-1"><strong>Asif M Sazid
                                                Tappware</strong></span>
                                        <span class="opacity-75 fs-8 lh-1 mb-1">GUEST</span>
                                    </div>
                                </li>
                                <li class="navi-header font-weight-bold py-4">
                                    <span class="font-size-lg">Settings</span>
                                </li>
                                <li class="navi-header font-weight-bold py-4">
                                    <span class="font-size-lg">Upgrade</span>
                                </li>
                                <li class="navi-header font-weight-bold py-4">
                                    <span class="font-size-lg">Logout</span>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                    </div>
                @else
                    <a href="{{ route('register') }}" class="btn btn-flex btn-sm fw-bold btn-info py-3">Sign Up</a>
                @endif
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container h-full">
            <div class="card card-flush card-chat">
                <div class="card-body d-flex flex-row p-0">
                    <div class="chat-body d-flex flex-column">
                        <div class="chat-window mb-2" id="chat-window">
                            <!-- Chat messages go here and this section will scroll -->
                        </div>
                    </div>
                    <div class="chat-action d-none" id="chat-action">
                        <div data-bs-toggle="tooltip" data-original-title="Reset Conversation" data-bs-placement="left">
                            <a class="btn btn-outline-secondary text-center" id="resetConversationBtn"
                                aria-haspopup="true">
                                <i class="fa-solid fa-arrows-rotate"></i>
                            </a>
                        </div>
                        <div data-bs-toggle="tooltip" data-original-title="Share Conversation" data-bs-placement="left">
                            <a class="btn btn-outline-secondary text-center" aria-haspopup="true">
                                <i class="fa-regular fa-share-from-square"></i>
                            </a>
                        </div>
                        <div data-bs-toggle="tooltip" data-original-title="Download Conversation"
                            data-bs-placement="left">
                            <a class="btn btn-outline-secondary text-center" aria-haspopup="true">
                                <i class="fa-solid fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>




                <div class="card-footer">
                    <div class="suggested-button-section d-flex flex-wrap mb-3">
                        <button type="button" class="btn btn-outline-secondary m-2 suggested-button">Summarize</button>
                        <button type="button" class="btn btn-outline-secondary m-2 suggested-button">Highlight</button>
                        <button type="button" class="btn btn-outline-secondary m-2 suggested-button">Simplify</button>
                        <button type="button" class="btn btn-outline-secondary m-2 suggested-button">Enhance</button>
                        <button type="button"
                            class="btn btn-outline-secondary m-2 suggested-button">Critique</button>
                        <button type="button" class="btn btn-outline-secondary m-2 suggested-button">Meme</button>
                        <button type="button" class="btn btn-outline-primary m-2 suggested-button">+</button>
                    </div>
                    <form id="chat-form">
                        <div class="input-group">
                            <input type="text" id="user-input" class="form-control"
                                placeholder="Type a message..." required>
                            <button id="submitButton" class="btn btn-primary" type="submit" disabled>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('css')
        <style>
            .full-width {
                width: 100%;
            }

            .h-full {
                height: calc(100vh - 180px) !important;
                max-width: 100vw !important;
            }

            #chat-title {
                display: inline-block;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                vertical-align: bottom;
                width: auto;
            }

            .chat-body,
            .chat-window {
                background-color: white;
                padding: 10px;
            }

            .chat-body {
                flex: 1;
                display: flex;
                overflow: hidden;
                max-height: calc(100vh - 250px);
            }

            .chat-window {
                flex: 1;
                overflow-y: auto;
            }

            .chat-action {
                padding: 10px;
                display: none;
                flex-direction: column;
                justify-content: flex-start;
                margin-right: 1%;
                background-color: white;
            }

            .chat-action .btn {
                border-radius: 50%;
                width: 35px;
                height: 35px;
                margin: 10px 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .chat-action .btn i {
                font-size: 14px;
            }

            .chat-bubble {
                display: flex;
                align-items: flex-start;
                padding: 10px;
                border-radius: 15px;
                margin-bottom: 10px;
                max-width: 90%;
                position: relative;
            }

            .bot-message,
            .user-message {
                background-color: transparent;
                clear: both;
                margin-bottom: 5%;
            }

            .bot-message {
                text-align: left;
                flex-direction: row;
                float: left;
            }

            .user-message {
                text-align: right;
                flex-direction: row-reverse;
                justify-content: flex-end;
                float: right;
            }

            .chat-avatar {
                width: 40px;
                height: 40px;
                margin: 0 10px;
                border-radius: 50%;
            }

            .chat-text {
                max-width: 100%;
                word-wrap: break-word;
                padding: 10px;
            }

            .user-message .chat-text {
                background-color: #ececec;
                border-radius: 1.5rem;
            }

            .card-footer {
                width: 100%;
                background-color: #fff;
                padding: 10px;
            }

            .input-group {
                width: 100%;
            }

            .typing-indicator {
                display: inline-block;
                width: 10px;
                height: 10px;
                background-color: #007bff;
                border-radius: 50%;
                margin-right: 5px;
                animation: bounce 1.2s infinite ease-in-out both;
            }

            .typing-indicator:nth-child(2) {
                animation-delay: 0.2s;
            }

            .typing-indicator:nth-child(3) {
                animation-delay: 0.4s;
            }

            @keyframes bounce {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-10px);
                }
            }

            .blinking-cursor {
                display: inline-block;
                width: 1rem;
                border-radius: 50%;
                height: 1rem;
                background-color: rgb(46, 46, 46);
                margin-left: 2px;
                animation: blink 1s step-end infinite;
            }

            @keyframes blink {

                from,
                to {
                    visibility: hidden;
                }

                50% {
                    visibility: visible;
                }
            }


            @media (max-width: 576px) {
                #chat-title {
                    max-width: 180px;
                }

                .chat-bubble {
                    max-width: 100%;
                    font-size: 13px;
                }

                .chat-avatar {
                    width: 30px;
                    height: 30px;
                    margin: 0px 10px 0px 0px;
                }

                .chat-window,
                .h-full {
                    min-height: calc(100vh - 280px);
                }

                .user-message,
                .bot-message {
                    flex-direction: row;
                    justify-content: flex-start;
                    float: none;
                    text-align: left;
                    width: 100%;
                }

                .chat-body {
                    max-height: calc(100vh - 280px);
                }
            }

            @media (min-width: 577px) and (max-width: 768px) {
                #chat-title {
                    max-width: 360px;
                }

                .chat-bubble {
                    max-width: 80%;
                }

                .chat-window,
                .h-full {
                    min-height: calc(100vh - 180px);
                }
            }

            @media (min-width: 768.1px) {
                .chat-bubble {
                    max-width: 90%;
                }

                .chat-window {
                    min-height: calc(100vh - 240px);
                }

                .h-full {
                    min-height: calc(100vh - 240px);
                }
            }

            @media (max-width: 991.98px) {
                .chat-action {
                    display: none;
                }
            }
        </style>
    @endpush


    @push('js')
        <script>
            // Function to handle file uploads and drag-and-drop
            const fileDropArea = document.getElementById('file-upload');
            const fileInput = document.getElementById('fileInput');
            const responseBody = document.getElementById('responseBody');
            const chatTitle = document.getElementById('chat-title');
            const submitButton = document.getElementById('submitButton');
            const chatWindow = document.getElementById('chat-window');
            const userInput = document.getElementById('user-input');
            const chatForm = document.getElementById('chat-form');
            const suggestedButtons = document.querySelectorAll('.suggested-button');
            const chatAction = document.getElementById('chat-action');

            suggestedButtons.forEach(button => {
                button.disabled = true;
            });

            let extractDocText = '';

            // Click event to open file dialog
            fileDropArea.addEventListener('click', () => {
                fileInput.click();
            });

            // Drag and Drop functionality
            fileDropArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                fileDropArea.classList.add('drag-over');
            });

            fileDropArea.addEventListener('dragleave', (e) => {
                e.preventDefault();
                fileDropArea.classList.remove('drag-over');
            });

            fileDropArea.addEventListener('drop', (e) => {
                e.preventDefault();
                fileDropArea.classList.remove('drag-over');
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    fileInput.files = files;
                    handleFiles(files);
                }
            });

            // File input change event
            fileInput.addEventListener('change', (event) => {
                const files = event.target.files;
                handleFiles(files);
            });

            function titleChange(fileName) {
                const fullTitle = `${fileName}`;
                let index = 0;

                const typingInterval = setInterval(() => {
                    if (index < fullTitle.length) {
                        chatTitle.textContent += fullTitle.charAt(index);
                        index++;
                    } else {
                        clearInterval(typingInterval); // Stop the typing effect once complete
                    }
                }, 50);
                chatTitle.setAttribute('data-original-title', fullTitle)
            }

            async function storeExtractedTextInSession(extractDocText) {
                try {
                    const csrfMetaTag = document.querySelector('meta[name="csrf-token"]');
                    const csrfToken = csrfMetaTag ? csrfMetaTag.getAttribute('content') : '';

                    const response = await fetch('/store-extracted-text', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            extracted_text: extractDocText
                        })
                    });

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const result = await response.json();

                } catch (error) {

                    console.error('Error sending extracted text:', error);
                }
            }

            // Function to handle files
            async function handleFiles(files) {
                if (files.length > 0) {
                    try {
                        const file = files[0];
                        const fileName = file.name;

                        // Show the file name as a message in the user's chat bubble
                        addMessage(`Uploaded file: ${file.name}`, 'user-message', 'user');

                        // Proceed to upload and summarize the file
                        await summarizedTextResponse(file);
                        if (window.innerWidth >= 992) {
                            chatAction.classList.replace('d-none', 'd-flex');
                            console.log(chatAction.classList);
                        }

                        submitButton.disabled = false;

                        suggestedButtons.forEach(button => {
                            button.disabled = false;
                        });

                        titleChange(fileName);
                    } catch (error) {
                        console.error('Error:', error);
                        const errorMessage = "Sorry, something went wrong while processing the file. Please try again.";
                        simulateTypingEffect(errorMessage);
                    }
                } else {
                    alert('No files selected');
                }
            }

            // Function to get and display summarized text response
            async function summarizedTextResponse(file) {
                try {
                    const formData = new FormData();
                    formData.append('pdf', file);

                    // Show typing indicator while the API processes the file
                    showTypingIndicator();

                    const response = await fetch(
                        'http://62.171.163.137:8055/api/pdf_to_summary/', { // Replace with your API URL
                            method: 'POST',
                            body: formData
                        });


                    removeTypingIndicator(); // Remove typing indicator once response is received

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const result = await response.json();
                    extractDocText = result.extracted_text;

                    storeExtractedTextInSession(extractDocText);

                    if (result.summary) {
                        simulateTypingEffect(result);
                    } else {
                        simulateTypingEffect("Unable to summarize the document. Please try another file.");
                    }

                } catch (error) {
                    console.error('Error uploading file:', error);
                    removeTypingIndicator(); // Ensure the typing indicator is removed even on error
                    const errorMessage = "Sorry, something went wrong while processing the file. Please try again.";
                    simulateTypingEffect(errorMessage);
                }
            }

            // Function to handle form submit event
            chatForm.addEventListener('submit', async (e) => {
                e.preventDefault(); // Prevent the form from refreshing the page

                userMessage = userInput.value.trim();
                if (userMessage) {
                    addMessage(userMessage, 'user-message', 'user');
                    userInput.value = ''; // Clear input field

                    try {
                        await handleChatRequest();
                    } catch (error) {
                        console.error('Error handling chat request:', error);
                        removeTypingIndicator(); // Ensure typing indicator is removed even on error
                        const errorMessage =
                            "Sorry, something went wrong while sending the message. Please try again.";
                        simulateTypingEffect(errorMessage);
                    }
                }
            });

            // Function to handle chat request
            async function handleChatRequest() {
                try {
                    const response = await fetch('/get-extracted-text');

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const result = await response.json();
                    extractDocText = result.extracted_text;

                    // Show typing indicator while the bot is "thinking"
                    showTypingIndicator();

                    // Send the query to the API
                    const apiResponse = await fetch(
                        'http://62.171.163.137:8055/api/text_with_query/', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                text: extractDocText,
                                query: userMessage
                            })
                        });

                    removeTypingIndicator();

                    if (!apiResponse.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const apiResult = await apiResponse.json();
                    // console.log('Chat API Result:', apiResult); // Debugging log

                    // Check if the result contains a valid answer
                    if (apiResult.answer) {
                        simulateTypingEffect(apiResult);
                    } else {
                        simulateTypingEffect("Sorry, I couldn't find an answer to your query. Please try again.");
                    }

                } catch (error) {
                    console.error('Error:', error);
                    removeTypingIndicator(); // Remove typing indicator even on error
                    const errorMessage = "Sorry, something went wrong while sending the message. Please try again.";
                    simulateTypingEffect(errorMessage);
                }
            }

            // Add messages to chat window
            function addMessage(message, className, sender) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('chat-bubble', className);

                const avatar = document.createElement('img');
                avatar.classList.add('chat-avatar');
                avatar.src = sender === 'user' ? 'assets/media/users/100_12.jpg' : 'assets/media/chatbot/ai-chatbot-4.png';

                const textDiv = document.createElement('div');
                textDiv.classList.add('chat-text');
                textDiv.innerText = message;

                messageDiv.appendChild(avatar);
                messageDiv.appendChild(textDiv);
                chatWindow.appendChild(messageDiv);
                chatWindow.scrollTop = chatWindow.scrollHeight;
            }

            // Show typing indicator for bot response
            function showTypingIndicator() {
                const typingDiv = document.createElement('div');
                typingDiv.classList.add('chat-bubble', 'bot-message');
                typingDiv.innerHTML = `
                <img src="assets/media/chatbot/ai-chatbot-4.png" class="chat-avatar">
                <span class="typing-indicator"></span>
                <span class="typing-indicator"></span>
                <span class="typing-indicator"></span>
            `;
                typingDiv.id = 'typing-indicator'; // Add ID for easy removal
                chatWindow.appendChild(typingDiv);
                chatWindow.scrollTop = chatWindow.scrollHeight;
            }

            // Remove typing indicator
            function removeTypingIndicator() {
                const typingDiv = document.getElementById('typing-indicator');
                if (typingDiv) {
                    typingDiv.remove();
                }
            }

            // Escape HTML special characters to avoid rendering HTML tags
            function escapeHtml(html) {
                const text = document.createTextNode(html);
                const div = document.createElement('div');
                div.appendChild(text);
                return div.innerHTML;
            }

            // Simulate typing effect for bot response
            function simulateTypingEffect(responseText) {
                const suggestedQueries = responseText.suggested_queries || [];

                const messageDiv = document.createElement('div');
                messageDiv.classList.add('chat-bubble', 'bot-message');

                const avatar = document.createElement('img');
                avatar.classList.add('chat-avatar');
                avatar.src = 'assets/media/chatbot/ai-chatbot-4.png';

                const contentDiv = document.createElement('div');
                contentDiv.classList.add('content-container');

                const textDiv = document.createElement('div');
                textDiv.classList.add('chat-text');

                contentDiv.appendChild(textDiv);

                // Append the avatar and content container to the messageDiv
                messageDiv.appendChild(avatar);
                messageDiv.appendChild(contentDiv);

                chatWindow.appendChild(messageDiv);
                chatWindow.scrollTop = chatWindow.scrollHeight;

                const responseTextContent = responseText.summary || responseText.answer ||
                    "Sorry, something went wrong. Please try again.";
                let formattedText = textFormation(responseTextContent);

                let index = 0;
                let tempDiv = document.createElement("div");
                tempDiv.innerHTML = formattedText;
                let nodes = Array.from(tempDiv.childNodes);

                // Create a blinking cursor element
                const cursor = document.createElement('span');
                cursor.classList.add('blinking-cursor');
                textDiv.appendChild(cursor);

                function typeNextNode() {
                    if (index < nodes.length) {
                        textDiv.insertBefore(nodes[index].cloneNode(true), cursor); // Insert before the cursor
                        chatWindow.scrollTop = chatWindow.scrollHeight;
                        index++;
                        setTimeout(typeNextNode, 200); // Adjust the delay (50ms)
                    } else {
                        // Once typing is complete, remove the cursor
                        cursor.remove();
                        // Show the suggested queries one by one
                        showSuggestedQueries(suggestedQueries, textDiv);
                    }
                }

                typeNextNode(); // Start typing
            }


            function showSuggestedQueries(queries, container) {
                let queryIndex = 0;

                function displayNextQuery() {
                    if (queryIndex < queries.length - 2) {
                        const textBtn = document.createElement('button');

                        const icon = document.createElement('i');
                        icon.classList.add('fa-regular', 'fa-circle-right', 'ms-2');
                        textBtn.appendChild(icon);

                        textBtn.appendChild(document.createTextNode('\u00A0')); // Non-breaking space

                        textBtn.appendChild(document.createTextNode(queries[queryIndex]));
                        textBtn.classList.add('btn', 'btn-text-success', 'btn-hover-light-success', 'font-weight-bold', 'mr-2',
                            'mx-2',
                            'text-left'); // Apply Bootstrap 5 classes and margin

                        textBtn.addEventListener('click', () => {
                            handleQuestionClick(textBtn.innerText);
                        });

                        // Append the button to the container
                        container.appendChild(textBtn);
                        chatWindow.scrollTop = chatWindow.scrollHeight;

                        queryIndex++;
                        // Add delay before showing the next button
                        setTimeout(displayNextQuery, 300); // Adjust the delay (300ms) as needed
                    }
                }

                if (queries) {
                    displayNextQuery(); // Start showing buttons
                }
            }

            // Text formatting function
            function textFormation(responseText) {
                let formattedSummary = responseText
                    .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>') // Bold text
                    .replace(/## (.*?)\n/g, '<h4>$1</h4>') // Headings
                    .replace(/^- (.*)/gm, '<li>$1</li>') // Bullet points
                    .replace(/\n/g, '<br>'); // Newline to <br>

                return formattedSummary;
            }

            async function handleQuestionClick(question) {
                // console.log('Button clicked:', question);
                userMessage = question + ' the content'
                addMessage(userMessage, 'user-message', 'user');
                userInput.value = ''; // Clear input field

                try {
                    await handleChatRequest();
                } catch (error) {
                    console.error('Error handling chat request:', error);
                    removeTypingIndicator(); // Ensure typing indicator is removed even on error
                    const errorMessage =
                        "Sorry, something went wrong while sending the message. Please try again.";
                    simulateTypingEffect(errorMessage);
                }
            }

            suggestedButtons.forEach(button => {
                button.addEventListener('click', function() {
                    handleQuestionClick(button.innerText);
                });
            });

            function resetConversation() {
                // Perform page reload or reset logic
                window.location.reload(); // This reloads the page
            }

            // Attach event listener to the reset button
            document.getElementById('resetConversationBtn').addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default behavior
                resetConversation(); // Call the reset function
            });

            // Attach event listener to the "Reset Chat" section
            document.getElementById('resetChatSection').addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default behavior
                resetConversation(); // Call the reset function
            });
        </script>
    @endpush


</x-frontend.layouts.master>
