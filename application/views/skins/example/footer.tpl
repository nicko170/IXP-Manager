
</div>

<footer>

    <p> 
        EXAMPLE SKIN!
        &nbsp;&nbsp;|&nbsp;&nbsp;
        IXP Manager V{$smarty.const.APPLICATION_VERSION}
        &nbsp;&nbsp;|&nbsp;&nbsp;
        Copyright &copy; 2010 - 2012 Internet Neutral Exchange Association Ltd. - <a href="http://www.inex.ie/">http://www.inex.ie/</a>
        &nbsp;|&nbsp;
        {mailto address=$config.identity.email encode='javascript' text="Contact Us"}
    </p>

    <p> 
        Licensed under GPL v2.0.
        &nbsp;|&nbsp;
        This Program is provided AS IS, without warranty.
        &nbsp;|&nbsp;
        {assign var="ENDTIME" value=microtime(1)}
        {assign var="RUNNINGTIME" value="`$ENDTIME-$smarty.const.APPLICATION_STARTTIME`"}
        Generated in {$RUNNINGTIME|string_format:"%0.3f"} seconds
    </p>
    
    <p> 
        Keep up with
        <span class="label label-info">
            <a class="aplain" href="http://www.inex.ie/">INEX</a>
        </span>
        &nbsp;|&nbsp;
        Get the source at
        <span class="label label-info">
            <a class="aplain" href="https://github.com/inex/IXP-Manager">GitHub</a>
        </span>
        &nbsp;|&nbsp;
        We're 
        <span class="label label-info">
            <a class="aplain" href="http://www.ipv6ready.ie/">IPv6 Ready</a>
        </span>
        Are you?
    </p>

    {if $smarty.const.APPLICATION_ENV != 'production' && !$hasIdentity}
        <p>
            <strong>
                THE IXP IS RUNNING IN NON-PRODUCTION MODE AND INFORMATION CAN BE LEAKED VIA DEBUGGING 
                UTILITIES. ENSURE HTACCESS IS IN PLACE.
            </strong>
        </p>
    {/if}


</footer>

</body>
</html>