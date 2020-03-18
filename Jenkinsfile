node("master"){
    stage("clean workspace"){
        deleteDir()
    }
    stage("checkout"){
            git branch: 'CSS', credentialsId: '99a70c08-32be-4365-8389-47f7b85c0c3d', url: 'https://github.com/RoisClimaco/Assignment1.git'
        }
    stage("retrieving"){
        bat label: '', script: '''
dir
robocopy . C:\\Users\\Admin\\Documents\\XAMPP\\htdocs\\temporary /E
@echo robocopy exit code: %ERRORLEVEL%
@if %ERRORLEVEL% GTR 3 ( echo robocopy ERROR )
@if %ERRORLEVEL% GTR 3 ( exit %ERRORLEVEL% )
@set ERRORLEVEL=0
        '''
    }
    stage("archiving"){
        archiveArtifacts artifacts: 'css/*.*' , excludes: '*.txt', onlyIfSuccessful: true
    }
}