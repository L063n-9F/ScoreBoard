# Overwatch Scoreboard
  HTML page with parsed results of game rank of several profiles
  of teammates from overwatch videogame official site. 
  Created as a quick access to the information about current 
  rank of a team inside game competitive mode. 

## Usage
  Folder <profiles> contains 4 html pages from official overwatch 
  site grabbed via wget command and cron task. <profile.php> 
  uses library phpQuery to grab numbers and other data 
  from profiles pages. <Index.php> composes final score board.

## Licensing
  phpQuery is under MIT-License. Created by TobiaszCudnik 
  <https://github.com/TobiaszCudnik/phpquery>
