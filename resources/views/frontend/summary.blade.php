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
                                    <div class="user-identity d-sm-flex flex-row justify-content-center me-2 me-md-4">
                                        <span class="fw-bold lh-1 mt-2"
                                            style="font-size: 1.2rem;"><strong>{{ auth()->user()->name }}</strong></span>
                                        <span class="badge rounded-pill bg-info text-dark opacity-75 ml-2 mb-4"
                                            style="font-size: 0.6rem">GUEST</span>
                                    </div>
                                </li>
                                <li class="navi-header font-weight-bold py-4">
                                    <span class="font-size-lg">Settings</span>
                                </li>
                                <li class="navi-header font-weight-bold py-4">
                                    <span class="font-size-lg">Upgrade</span>
                                </li>
                                <li class="navi-header font-weight-bold py-4">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="logout-btn" :href="route('logout')"
                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
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
                        <div data-bs-toggle="tooltip" data-original-title="Share Conversation" data-bs-placement="left"
                            onclick="shareConversation()">
                            <a class="btn btn-outline-secondary text-center" aria-haspopup="true">
                                <i class="fa-regular fa-share-from-square"></i>
                            </a>
                        </div>
                        <div data-bs-toggle="tooltip" data-original-title="Download Conversation"
                            data-bs-placement="left" onclick="downloadConversation()">
                            <a class="btn btn-outline-secondary text-center" aria-haspopup="true">
                                <i class="fa-solid fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>




                <div class="card-footer px-5 py-1">
                    <div class="suggested-button-section d-flex flex-wrap mb-3">
                        <button type="button"
                            class="btn btn-outline-secondary m-2 suggested-button">Summarize</button>
                        <button type="button"
                            class="btn btn-outline-secondary m-2 suggested-button">Highlight</button>
                        <button type="button"
                            class="btn btn-outline-secondary m-2 suggested-button">Simplify</button>
                        <button type="button" class="btn btn-outline-secondary m-2 suggested-button">Enhance</button>
                        <button type="button"
                            class="btn btn-outline-secondary m-2 suggested-button">Critique</button>
                        <button type="button" class="btn btn-outline-secondary m-2 suggested-button">Meme</button>
                        <button type="button" class="btn btn-outline-primary m-2 suggested-button">+</button>
                    </div>
                    <form id="chat-form">
                        <div class="input-group chat-input-group mb-5 m-2 p-2">
                            <div class="__chat-form-attachment">
                                <svg class="__attachment-icon" focusable="false" aria-hidden="true"
                                    viewBox="0 0 24 24" data-testid="AttachFileOutlinedIcon">
                                    <path
                                        d="M16.5 6v11.5c0 2.21-1.79 4-4 4s-4-1.79-4-4V5c0-1.38 1.12-2.5 2.5-2.5s2.5 1.12 2.5 2.5v10.5c0 .55-.45 1-1 1s-1-.45-1-1V6H10v9.5c0 1.38 1.12 2.5 2.5 2.5s2.5-1.12 2.5-2.5V5c0-2.21-1.79-4-4-4S7 2.79 7 5v12.5c0 3.04 2.46 5.5 5.5 5.5s5.5-2.46 5.5-5.5V6z">
                                    </path>
                                </svg>
                            </div>
                            <input type="text" id="user-input" class="form-control chat-input"
                                placeholder="Ask me anything about your document" required>
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
        <link rel="stylesheet" href="{{ asset('assets/css/summary.css') }}">
        <style>
            .copy-btn {
                display: none;
                padding: 0.5rem;
            }

            .copy-btn i {
                font-size: 1rem !important;
            }

            .content-container:hover .copy-btn {
                display: block;
            }
        </style>
    @endpush


    @push('js')
        <script>
            let msg = {};
            let toBStoredConversation = {
                id: '',
                messages: [],
                created_at: '',
                updated_at: '',
                extracted_text: '',
            };

            let activeConversation = null;
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
            const attachmentButton = document.querySelector('.__chat-form-attachment');
            const offcanvasUploadButton = document.querySelector('.__offcanvas-new-file-upload-section');
            const offcanvasFileInput = document.querySelector('#offcanvasFileInput');
            const targetUrl = window.location.origin + '/get-summary';
            let hasReset = false;
            let extractDocText = '';

            window.addEventListener('load', () => {
                hasReset = false; // Reset the state when the page loads
            });

            function generateUUID() {
                return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                    var r = Math.random() * 16 | 0,
                        v = c == 'x' ? r : (r & 0x3 | 0x8);
                    return v.toString(16);
                });
            }

            function updateURLWithUUID(cuid) {
                if (cuid) {
                    let conversationData = localStorage.getItem('history-' + cuid);
                    let formattedConversationData = JSON.parse(conversationData);
                    const extractedText = formattedConversationData.extracted_text;
                    chatTitle.innerHTML = '';
                    titleChange(formattedConversationData.title);
                    storeExtractedTextInSession(extractedText);
                    toBStoredConversation.id = cuid;

                    const newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname +
                        '?conversation=' + cuid;

                    history.pushState({
                        path: newUrl
                    }, '', newUrl);
                } else {
                    const uuid = generateUUID();
                    toBStoredConversation.id = uuid;

                    const newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname +
                        '?conversation=' + uuid;

                    history.pushState({
                        path: newUrl
                    }, '', newUrl);
                }
            }

            function callToaster(message, title, type) {
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };

                toastr.success(message, title);

            }

            suggestedButtons.forEach(button => {
                button.disabled = true;
            });

            fileDropArea.addEventListener('click', () => {
                if (window.location.href !== targetUrl) {
                    setTimeout(() => {
                        window.location.href = targetUrl;
                    }, 100);
                    fileInput.click();
                } else {
                    fileInput.click();
                }
            });

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

            fileInput.addEventListener('change', (event) => {
                const files = event.target.files;
                if (!hasReset) { // Only update URL if it hasn't been reset
                    updateURLWithUUID(); // Update the URL here after file upload
                }
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

            attachmentButton.addEventListener('click', () => {
                fileInput.click();
            });

            offcanvasUploadButton.addEventListener('click', () => {
                offcanvasFileInput.click(); // Trigger the hidden offcanvas-specific file input
            });

            offcanvasFileInput.addEventListener('change', (event) => {
                const files = event.target.files;
                if (files.length > 0) {
                    const selectedFile = files[0].name; // Get the selected file name
                    alert(`${selectedFile} is selected`); // Display the message with file name
                } else {
                    alert('No item selected'); // Notify if no file is selected
                }
            });

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

            async function handleFiles(files) {
                if (files.length > 0) {
                    try {
                        const file = files[0];
                        fileName = file.name;

                        if (activeConversation === null || activeConversation === false) {
                            toBStoredConversation.title = fileName;
                            toBStoredConversation.created_at = Date.now();
                        }

                        addMessage(`Uploaded file: ${file.name}`, 'user-message', 'user');

                        await summarizedTextResponse(file);
                        if (window.innerWidth >= 992) {
                            chatAction.classList.replace('d-none', 'd-flex');
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

            async function summarizedTextResponse(file) {
                try {
                    const formData = new FormData();
                    formData.append('pdf', file);
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
                    toBStoredConversation.extracted_text = extractDocText;
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

            async function handleChatRequest() {
                try {
                    const response = await fetch('/get-extracted-text');

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const result = await response.json();
                    extractDocText = result.extracted_text;
                    showTypingIndicator();

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

            function addMessage(message, className, sender) {
                // const msg = {
                //     conversation_id: toBStoredConversation.id,
                //     timestamp: Date.now(),
                //     sender: sender,
                //     text: message
                // };

                // toBStoredConversation.messages.push(msg); // Add message to the conversation
                // toBStoredConversation.updated_at = Date.now(); // Update the timestamp

                // if (localStorage.length < 5) {
                //     localStorage.setItem("history-" + toBStoredConversation.id, JSON.stringify(toBStoredConversation));
                // } else {
                //     alert("Maximum row count reached.");
                // }

                adjustProgressBar();
                renderConversations();

                if (sender != 'bot') {
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('chat-bubble', className);
                    const avatar = document.createElement('img');
                    avatar.classList.add('chat-avatar');
                    avatar.src = sender === 'user' ? 'assets/media/users/100_12.jpg' : 'assets/media/   /ai-chatbot-4.png';
                    const textDiv = document.createElement('div');
                    textDiv.classList.add('chat-text');
                    textDiv.innerText = message;
                    messageDiv.appendChild(avatar);
                    messageDiv.appendChild(textDiv);
                    chatWindow.appendChild(messageDiv);
                    chatWindow.scrollTop = chatWindow.scrollHeight;
                }

            }

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

            function removeTypingIndicator() {
                const typingDiv = document.getElementById('typing-indicator');
                if (typingDiv) {
                    typingDiv.remove();
                }
            }

            function escapeHtml(html) {
                const text = document.createTextNode(html);
                const div = document.createElement('div');
                div.appendChild(text);
                return div.innerHTML;
            }

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

                const responseTextContent = responseText.summary || responseText.answer ||
                    "Sorry, something went wrong. Please try again.";
                let formattedText = textFormation(responseTextContent);

                let tempDiv = document.createElement("div");
                tempDiv.innerHTML = formattedText;
                let nodes = Array.from(tempDiv.childNodes);

                let index = 0;
                textDiv.id = 'response-text-' + Date.now(); // Generate a unique ID for each response

                contentDiv.appendChild(textDiv);

                const copyButton = document.createElement('button');
                copyButton.classList.add('btn', 'btn-outline-secondary', 'copy-btn', 'ml-4');

                const icon = document.createElement('i');
                icon.classList.add('fas', 'fa-copy'); // Add Font Awesome classes for the copy icon
                copyButton.appendChild(icon);
                copyButton.setAttribute('aria-label', 'Copy to clipboard');
                copyButton.onclick = function() {
                    copyToClipboard(textDiv.id); // Call the copy function with the generated textDiv ID
                };

                contentDiv.appendChild(copyButton);

                messageDiv.appendChild(avatar);
                messageDiv.appendChild(contentDiv);

                chatWindow.appendChild(messageDiv);
                chatWindow.scrollTop = chatWindow.scrollHeight;

                addMessage(formattedText, 'bot-message', 'bot');

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
                        cursor.remove();
                        showSuggestedQueries(suggestedQueries, textDiv);
                    }
                }

                typeNextNode(); // Start typing
            }

            function copyToClipboard(elementId) {
                const textToCopy = document.getElementById(elementId).innerText;
                const textarea = document.createElement('textarea');
                textarea.value = textToCopy;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);
                callToaster("Copied to clipboard!", "Action", "primary");
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
                            'text-left', 'my-3', 'suggested-btn'); // Apply Bootstrap 5 classes and margin

                        textBtn.addEventListener('click', () => {
                            handleQuestionClick(textBtn.innerText);
                        });

                        container.appendChild(textBtn);
                        chatWindow.scrollTop = chatWindow.scrollHeight;

                        queryIndex++;
                        setTimeout(displayNextQuery, 300); // Adjust the delay (300ms) as needed
                    }
                }

                if (queries) {
                    displayNextQuery(); // Start showing buttons
                }
            }

            function textFormation(responseText) {
                let formattedSummary = responseText
                    .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>') // Bold text
                    .replace(/## (.*?)\n/g, '<h4>$1</h4>') // Headings
                    .replace(/^- (.*)/gm, '<li>$1</li>') // Bullet points
                    .replace(/\n/g, '<br>'); // Newline to <br>

                return formattedSummary;
            }

            async function handleQuestionClick(question) {
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

            window.onload = function() {
                const urlParams = new URLSearchParams(window.location.search);
                const conversationId = urlParams.get('conversation');

                if (conversationId) {
                    let conversationData = localStorage.getItem("history-" + conversationId);
                    let handledConversation = JSON.parse(conversationData);

                    activeConversation = true;
                    toBStoredConversation.title = handledConversation.title;
                    displayMessagesInChatWindow(handledConversation.messages,
                        conversationId); // Assume this is a function you implement to load the conversation
                } else {
                    if (window.location.href !== targetUrl) {
                        window.location.href = targetUrl; // Redirect only if not already on the target URL
                    }
                }
            };

            function resetConversation() {
                hasReset = true;
                const baseUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
                history.replaceState({}, document.title, baseUrl);

                window.location.reload(); // This reloads the page
            }

            document.getElementById('resetConversationBtn').addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default behavior
                resetConversation(); // Call the reset function
            });

            document.getElementById('resetChatSection').addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default behavior
                resetConversation(); // Call the reset function
            });

            function handleSidebarItemClick(conversationId, element) {
                let conversationData = localStorage.getItem("history-" + conversationId);

                if (conversationData) {
                    let handledConversation = JSON.parse(conversationData);

                    activeConversation = true;
                    toBStoredConversation.title = handledConversation.title;

                    displayMessagesInChatWindow(handledConversation.messages, conversationId);
                    userInput.value = ''; // Clear input field for new messages
                    handledConversation.id = conversationId; // Set the current conversation id for future messages

                    document.querySelectorAll('.list-item').forEach(item => {
                        item.classList.remove('selected'); // Assuming you add a CSS class for selected items
                    });

                    element.classList.add('selected');
                }
            }

            function historyDelete(conversationId, element) {
                let conversationData = localStorage.getItem("history-" + conversationId);

                if (conversationData) {
                    const userConfirmed = confirm("Are you sure you want to delete this conversation?");

                    if (userConfirmed) {
                        localStorage.removeItem("history-" + conversationId);

                        setTimeout(() => {
                            window.location.href = targetUrl; // Redirect after deletion
                        }, 100);
                    }
                }

            }

            function displayMessagesInChatWindow(messages, cuid) {
                chatWindow.innerHTML = ''; // Clear the current chat window

                messages.forEach(message => {
                    let messageHtml = `
                        <div class="chat-bubble ${message.sender === 'user' ? 'user-message' : 'bot-message'}">
                            <img class="chat-avatar" src="${message.sender === 'bot' ? 'assets/media/chatbot/ai-chatbot-4.png' : 'assets/media/users/100_12.jpg'}" alt="Avatar">
                            <div class="content-container">
                                <div class="chat-text">${message.text}</div>
                            </div>
                        </div>
                    `;
                    chatWindow.innerHTML += messageHtml; // Append each message to the chat window
                });
                chatWindow.scrollTop = chatWindow.scrollHeight; // Scroll to the bottom
                submitButton.disabled = false;
                if (window.innerWidth >= 992) {
                    chatAction.classList.replace('d-none', 'd-flex');
                }

                suggestedButtons.forEach(button => {
                    button.disabled = false;
                });


                updateURLWithUUID(cuid);
            }

            function shareConversation() {
                toBeShareUrl = targetUrl + '?conversation=' + toBStoredConversation.id;
                const textarea = document.createElement('textarea');
                textarea.value = toBeShareUrl;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);
                callToaster("URL copied to share!", "Action");
            }

            function downloadConversation() {
                const uuid = toBStoredConversation.id; // Assuming you have the UUID here
                const conversation = localStorage.getItem("history-" + uuid); // Get the conversation from localStorage

                if (conversation) {
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/get-summary-pdf-download'; // Post to Laravel route
                    form.target = '_blank'; // Open in a new tab

                    const csrfTokenInput = document.createElement('input');
                    csrfTokenInput.type = 'hidden';
                    csrfTokenInput.name = '_token';
                    csrfTokenInput.value =
                        '{{ csrf_token() }}'; // You need to inject the CSRF token from Blade or JavaScript
                    form.appendChild(csrfTokenInput);

                    const conversationInput = document.createElement('input');
                    conversationInput.type = 'hidden';
                    conversationInput.name = 'conversation';
                    conversationInput.value = conversation; // Add the conversation data
                    form.appendChild(conversationInput);

                    const uuidInput = document.createElement('input');
                    uuidInput.type = 'hidden';
                    uuidInput.name = 'uuid';
                    uuidInput.value = uuid; // Add the UUID value
                    form.appendChild(uuidInput);

                    document.body.appendChild(form);
                    form.submit();

                    document.body.removeChild(form);
                } else {
                    alert('No conversation data found in localStorage.');
                }
            }
        </script>
    @endpush


</x-frontend.layouts.master>
