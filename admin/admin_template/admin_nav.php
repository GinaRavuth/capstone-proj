<!-- Admin navigation sidebar --> 
<div id="sidebar-wrapper">
    <ul class="sidebar-nav text-center">
        <li class="sidebar-brand">
            <a href="index.php"><h1>Ordino</h1></a>
        </li>
        <li>
            <a href="index.php?view=messages">Check Messages</a>
        </li>
        <li>
            <a href="index.php?view=checkout">Approve Checkouts</a>
        </li>
                <li>
            <a href="index.php?view=return">Approve Returns</a>
        </li>
        <li>
			<a id ="drop" href="#">Manage Hardware <span class="caret"></a>
			<ul class="submenu">
				<li><a href="index.php?view=add">Add Hardware</a></li>
				<li><a href="index.php?view=edit">Edit Hardware</a></li>
				<li><a href="index.php?view=delete">Delete Hardware</a></li>
			</ul>
		</li>
		<li>
            <a id="drop" href="#">Manage Accounts <span class="caret"></a>
			<ul class="submenu">
				<li><a href="index.php?view=create_account">Create Account</a></li>
				<li><a href="index.php?view=edit_account">Edit Account</a></li>
				<li><a href="index.php?view=delete_account">Delete Account</a></li>
			</ul>
        </li>
        <li>
            <a href="" name="logout" id="logout" value="logout">Log out</a>
        </li>
	</ul>
</div>
<!-- End navigation sidebar -->
