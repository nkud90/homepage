<footer>
<button onclick="history.back()" style="margin-top: 10px;">◀️ Go back</button>
    <hr>
    <div>
        <p style="font-weight: 200; font-size: 0.85em">This page was last modified on 
            <span id="modified">
                <?php
                // Use $currentPage if it's set, otherwise fall back to __FILE__
                $fileToCheck = isset($currentPage) ? $currentPage : __FILE__;
                echo date("F d Y H:i:s.", filemtime($fileToCheck));
                ?>
            </span>
        </p>
    </div>
    <hr>
    <p style="font-weight: 200; font-size: small">
        The contents of the web page and it's source code is licensed under <a href="https://opensource.org/license/unlicense/">The Unlicense</a>.<br>
        You can copy, modify, distribute, use for commercial purposes any material <br>without asking permission.
    </p>
    <a href="#"><img src="/assets/icons/github.svg" alt="Project's GitHub page" title="Project's GitHub page" width="24" height="24" class="icon"></a>
</footer>