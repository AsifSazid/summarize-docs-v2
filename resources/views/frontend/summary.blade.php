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
                            <li class="navi-header font-weight-bold py-4">
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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3" id="chat-title">Title
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
                    <a href="{{ route('register') }}" class="btn btn-flex btn-sm fw-bold btn-dark py-3">Sign Up</a>
                @endif
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container h-full">
            <div class="card card-flush card-chat h-xl-100">
                <div class="card-body chat-window" id="chat-window">
                </div>
                <div class="card-footer">
                    <form id="chat-form">
                        <div class="input-group">
                            <input type="text" id="user-input" class="form-control" placeholder="Type a message..."
                                required>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i></button>
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
                /* max-height: 72vh !important; */
                height: 100% !important;
                max-width: 100vw !important;
            }

            .chat-window {
                flex: 1;
                overflow-y: auto;
                /* Enable vertical scroll */
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 10px;
                background-color: white;
                height: 100%;
                max-height: calc(100vh - 260px);
                /* Ensure the chat window height adjusts on various devices */
            }

            .chat-bubble {
                display: flex;
                align-items: center;
                padding: 10px;
                border-radius: 15px;
                margin-bottom: 10px;
                max-width: 80%;
                position: relative;
                align-items: flex-start
            }

            .bot-message {
                background-color: transparent;
                text-align: left;
                flex-direction: row;
                float: left;
                clear: both;
                margin-top: 2%;
            }

            .user-message {
                background-color: transparent;
                text-align: left;
                flex-direction: row-reverse;
                justify-content: flex-end;
                float: right;
                clear: both;
            }

            .chat-avatar {
                width: 40px;
                height: 40px;
                margin: 0 10px;
                border-radius: 50%;
                align-self: flex-start
            }

            .chat-text {
                max-width: calc(100%);
                word-wrap: break-word;
                padding: 10px !important;
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

            @media (max-width: 576px) {
                .chat-bubble {
                    max-width: 85%;
                    font-size: 14px;
                }

                .chat-avatar {
                    width: 30px;
                    height: 30px;
                }

                .chat-window {
                    width: 100%;
                    min-height: calc(100vh - 200px);
                }
            }

            @media (min-width: 577px) and (max-width: 768px) {
                .chat-bubble {
                    max-width: 80%;
                }

                .chat-window {
                    width: 100%;
                    min-height: calc(100vh - 180px);
                }
            }

            @media (min-width: 768.1px) {
                .chat-bubble {
                    max-width: 70%;
                }

                .chat-window {
                    width: 100%;
                    min-height: calc(100vh - 200px);
                }
            }
        </style>
    @endpush


    @push('js')
        <script>
            // File upload and summary display

            const fileDropArea = document.getElementById('file-upload');
            const fileInput = document.getElementById('fileInput');
            const responseBody = document.getElementById('responseBody');
            const chatTitle = document.getElementById('chat-title');

            let extractDocText = '';

            // Click event to open file dialog
            fileDropArea.addEventListener('click', function() {
                fileInput.click();
            });

            // Drag and Drop functionality
            fileDropArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                fileDropArea.classList.add('drag-over');
            });

            fileDropArea.addEventListener('dragleave', function(e) {
                e.preventDefault();
                fileDropArea.classList.remove('drag-over');
            });

            fileDropArea.addEventListener('drop', function(e) {
                e.preventDefault();
                fileDropArea.classList.remove('drag-over');

                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    fileInput.files = files;
                    handleFiles(files);
                }
            });

            // File input change event
            fileInput.addEventListener('change', function(event) {
                const files = event.target.files;
                handleFiles(files);
            });

            function titleChange(fileName) {
                const fullTitle = `Summary of ${fileName}`;
                let index = 0;

                const typingInterval = setInterval(() => {
                    if (index < fullTitle.length) {
                        chatTitle.textContent += fullTitle.charAt(index);
                        index++;
                    } else {
                        clearInterval(typingInterval); // Stop the typing effect once complete
                    }
                }, 50);
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
                        'http://192.168.10.185:8800/api/pdf_to_summary/', { // Replace with your API URL
                            method: 'POST',
                            body: formData
                        });

                    removeTypingIndicator(); // Remove typing indicator once response is received

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const result = await response.json();
                    extractDocText = result.extracted_text;

                    console.log('PDF Summary Result:', result); // Debugging log

                    // Check if there is a valid summary in the result, otherwise show an error message
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

            // Text formatting function
            function textFormation(responseText) {
                let formattedSummary = responseText
                    .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>') // Bold text
                    .replace(/## (.*?)\n/g, '<h4>$1</h4>') // Headings
                    .replace(/^- (.*)/gm, '<li>$1</li>') // Bullet points
                    .replace(/\n/g, '<br>'); // Newline to <br>

                return formattedSummary;
            }

            // Chat interface
            const chatWindow = document.getElementById('chat-window');
            const userInput = document.getElementById('user-input');
            const chatForm = document.getElementById('chat-form');

            // Handle form submit event
            chatForm.addEventListener('submit', async (e) => {
                e.preventDefault(); // Prevent the form from refreshing the page

                const userMessage = userInput.value.trim();
                if (userMessage) {
                    addMessage(userMessage, 'user-message', 'user');
                    userInput.value = ''; // Clear input field

                    // Show typing indicator while the bot is "thinking"
                    showTypingIndicator();

                    try {
                        const response = await fetch(
                            'http://192.168.10.185:8800/api/text_with_query/', { // Replace with your API URL
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    text: extractDocText,
                                    query: userMessage
                                })
                            });

                        removeTypingIndicator(); // Remove the typing indicator once the response is received

                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }

                        const result = await response.json();
                        console.log('Chat API Result:', result); // Debugging log

                        // Check if the result contains a valid answer
                        if (result.answer) {
                            simulateTypingEffect(result);
                        } else {
                            simulateTypingEffect(
                                "Sorry, I couldn't find an answer to your query. Please try again.");
                        }

                    } catch (error) {
                        console.error('Error sending message:', error);
                        removeTypingIndicator(); // Remove typing indicator even on error
                        const errorMessage =
                            "Sorry, something went wrong while sending the message. Please try again.";
                        simulateTypingEffect(errorMessage);
                    }
                }
            });

            // Add messages to chat window
            function addMessage(message, className, sender) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('chat-bubble', className);

                const avatar = document.createElement('img');
                avatar.classList.add('chat-avatar');
                avatar.src = sender === 'user' ? 'assets/media/users/100_12.jpg' : 'assets/media/users/default.jpg';

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
                <img src="assets/media/users/default.jpg" class="chat-avatar">
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

                const messageDiv = document.createElement('div');
                messageDiv.classList.add('chat-bubble', 'bot-message');

                const avatar = document.createElement('img');
                avatar.classList.add('chat-avatar');
                avatar.src = 'assets/media/users/default.jpg';

                const textDiv = document.createElement('div');
                textDiv.classList.add('chat-text');
                messageDiv.appendChild(avatar);
                messageDiv.appendChild(textDiv);

                chatWindow.appendChild(messageDiv);
                chatWindow.scrollTop = chatWindow.scrollHeight;

                responseText = responseText.summary || responseText.answer || "Sorry, something went wrong. Please try again.";

                let formattedText = textFormation(responseText);

                let index = 0;
                let tempDiv = document.createElement("div");
                tempDiv.innerHTML = formattedText;
                let nodes = Array.from(tempDiv.childNodes);

                function typeNextNode() {
                    if (index < nodes.length) {
                        // Append the current node (either text or HTML element) to the target element
                        textDiv.appendChild(nodes[index].cloneNode(true));
                        chatWindow.scrollTop = chatWindow.scrollHeight;
                        index++;
                        setTimeout(typeNextNode, 50); // Adjust the delay (50ms)
                    }
                }

                typeNextNode(); // Start typing
            }
        </script>
    @endpush


</x-frontend.layouts.master>
