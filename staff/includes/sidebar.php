<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if($page=='dashboard'){ echo 'active'; }?>"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="<?php if($page=='member'){ echo 'submenu active'; } else { echo 'submenu';}?>"> <a href="#"><i class="icon icon-group"></i> <span>Manage Members</span></a>
      <ul>
        <li><a href="members.php">List All Members</a></li>
        <li><a href="member-entry.php">Member Entry Form</a></li>
        <!--<li><a href="remove-member.php">Remove Member</a></li>-->
        <!--<li><a href="edit-member.php">Update Member Details</a></li>!-->
        <li class="<?php if($page=='payment'){ echo 'active'; }?>"><a href="payment.php"> <span>Renew Membership</span></a></li>
      </ul>
    </li>

    <li class="<?php if($page=='equipment'){ echo 'submenu active'; } else { echo 'submenu';}?>"> <a href="#"><i class="icon icon-cogs"></i> <span>Gym Equipment</span> </a>
      <ul>
        <li><a href="equipment.php">List Gym Equipment</a></li>
        <li><a href="equipment-entry.php">Add Equipment</a></li>
        <!--<li><a href="remove-equipment.php">Remove Equipment</a></li>-->
        <!--<li><a href="edit-equipment.php">Update Equipment Details</a></li>!-->
      </ul>
    </li>
    <!--<li class="<?php if($page=='membersts'){ echo 'active'; }?>"><a href="member-status.php"><i class="icon icon-eye-open"></i> <span>Member's Status</span></a></li>!-->
    
    <li class="<?php if($page=='attendance'){ echo 'active'; }?>"><a href="attendance.php"><i class="icon icon-calendar"></i> <span>Manage Attendance</span></a></li>
    
   
   
       <li class="<?php if($page=='equipment'){ echo 'submenu active'; } else { echo 'submenu';}?>"> <a href="#"><i class="icon icon-bullhorn"></i> <span>Announcements</span> </a>
      <ul>
        <li><a href="manage-announcement.php">Announcements</a></li>
        <li><a href="announcement.php">Make Announcement</a></li>
     
      </ul>
    </li>

    </li>
  </ul>
</div>
<!--sidebar-menu-->