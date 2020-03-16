<meta charset="utf-8"/>
<title>Disable MacBook Pro Dedicated GPU</title>
<meta name="description" content="На Макбуке late 2011 после обновлений гаснет экран, сбивается экран, рябит, полосы возникают. 2 раза сдавал чинить и платил хорошие деньги. Оказалось, можно сделать все самому без денежных вложений. Здесь подробности. В основном для себя, чтобы потом, если что, не искать информацию."/>
<style>
    .question_txt .blk {
        margin-top: 30px;
    }

    .blk {
        margin: 3% 0 0;
        border: 0;
    }
    .c_text {
        text-align: center;
    }
    .question_txt {
        width: 1200px;
        box-shadow: 3px 3px 20px #eee;
        padding: 40px;
        margin: 120px auto;
    }
    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .pb4 {
        padding-bottom: 40px;
    }
    .new_css .question_body {
        background: #FFF;
        border-radius: 4px;
        margin: 0 auto;
        width: 800px;
        padding: 50px 70px;
        position: relative;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13), 0 1px 3px rgba(0, 0, 0, 0.13);
    }
    .blk_step_prod .step_circle {
        float: left;
        text-align: center;
        width: 35px;
        border-radius: 5px;
        padding: 9px 0;
        font-size: 16px;
        line-height: 1;
        background: #61B2DA;
        color: #FFF;
        text-shadow: 1px 1px #5195B6;
        border: 1px solid #67BFE9;
        border-right: 1px solid #3890B8;
        border-bottom: 1px solid #08628B;
    }
</style>
<div class=WordSection1>
<h1>Disable MacBook Pro Dedicated GPU</h1>
<p><br /><br />Important Notes:</p>
<ul>
    <li>I have recently come up with a MUCH better, PERMANENT solution to this issue, which I'd recommend using instead. More info can be found&nbsp;<a href="https://computeco.de/Demux">here</a>.</li>
</ul>
<ul>
    <li>After performing the steps below, sleep mode and brightness control will NOT work properly on your system.</li>
</ul>
<p><br /><br />First, ensure your machine is completely shut down (You can press Control + Option + Shift + Power keys to reset the SMC).</p>
<p>Now, boot your machine while holding the Command + S keys. As the system boots, it should display white text on a black screen, and should eventually stop at a prompt.</p>
<p>At this prompt, enter the following command and press Return: nvram fa4ce28d-b62f-4c99-9cc3-6815686e30f9:gpu-power-prefs=%01%00%00%00</p>
<p>Next, enter reboot, and press Return.</p>
<p>Immediately after running the reboot command, hold down Command + R (if you're running OS X 10.11 or later) to boot into Recovery Mode. If you don't have a Recovery Partition, you can boot from a Mac OS installer USB drive.</p>
<p>Once booted in Recovery Mode, open Terminal, and run the following command: csrutil disable</p>
<p>Reboot the system.</p>
<p>Once the system reboots, it should now successfully boot into your install of OS X. Now, you'll need to download the program found&nbsp;<a href="http://dosdude1.com/apps/MacBook%20Pro%20dGPU%20Disabler.zip">here</a>.</p>
<p>Run the program, follow the prompts, and enter your password when prompted.</p>
<p>Once the tool finishes running, your system should now run without the dedicated graphics, and should work completely normally.</p>
</div>