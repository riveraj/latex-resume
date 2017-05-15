<?php
/**
 * The project's console commands configuration for the Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    /**
     * Build the resume in PDF format.
     */
    public function buildPdf(): void
    {
        $this->taskExecStack()
            ->exec('php generate.php')
            ->exec('pdflatex resume.tex')
            ->exec('rm resume.aux resume.log resume.out resume.tex')
            ->stopOnFail()
            ->run();
    }
}
