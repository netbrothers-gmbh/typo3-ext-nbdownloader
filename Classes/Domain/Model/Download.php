<?php

namespace NetBrothers\Nbdownloader\Domain\Model;

/* * *************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Stefan Wessel <info@netbrothers.de>, NetBrothers GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * Save downloadable files
 */

/**
 * Download
 */
class Download
    extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * filename
     *
     * @var string
     * @validate NotEmpty
     */
    protected $filename = '';

    /**
     * source
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     */
    protected $source = NULL;

    /**
     * filename
     *
     * @var string
     */
    protected $downloadName = '';

    /**
     * counter
     *
     * @var integer
     */
    protected $counter = 0;

    /**
     * description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * abstract
     *
     * @var string
     * @validate NotEmpty
     */
    protected $abstract = '';

    /**
     * author
     *
     * @var string
     * @validate NotEmpty
     */
    protected $author = '';

    /**
     * version
     *
     * @var string
     * @validate NotEmpty
     */
    protected $version = '';

    /**
     * publicDate
     *
     * @var \DateTime
     */
    protected $publicDate = NULL;

    /**
     * cat
     *
     * @var \NetBrothers\Nbdownloader\Domain\Model\Category
     * @lazy
     */
    protected $cat = NULL;

    /**
     * Returns the filename
     *
     * @return string $filename
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets the filename
     *
     * @param string $filename
     * @return void
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * Returns the source
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets the source
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $source
     * @return void
     */
    public function setSource(\TYPO3\CMS\Extbase\Domain\Model\FileReference $source)
    {
        $this->source = $source;
    }
    
    
    /**
     * Returns the downloadName
     *
     * @return string $downloadName
     */
    public function getDownloadName()
    {
        return $this->downloadName;
    }

    /**
     * Sets the downloadName
     *
     * @param string $downloadName
     * @return void
     */
    public function setDownloadName($downloadName)
    {
        $this->downloadName = $downloadName;
    }

    /**
     * Returns the counter
     *
     * @return integer $counter
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * Sets the counter
     *
     * @param integer $counter
     * @return void
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the abstract
     *
     * @return string $abstract
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Sets the abstract
     *
     * @param string $abstract
     * @return void
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
    }

    /**
     * Returns the author
     *
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param string $author
     * @return void
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Returns the version
     *
     * @return string $version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets the version
     *
     * @param string $version
     * @return void
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * Returns the publicDate
     *
     * @return \DateTime $publicDate
     */
    public function getPublicDate()
    {
        return $this->publicDate;
    }

    /**
     * Sets the publicDate
     *
     * @param \DateTime $publicDate
     * @return void
     */
    public function setPublicDate(\DateTime $publicDate)
    {
        $this->publicDate = $publicDate;
    }

    /**
     * Returns the cat
     *
     * @return \NetBrothers\Nbdownloader\Domain\Model\Category $cat
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Sets the cat
     *
     * @param \NetBrothers\Nbdownloader\Domain\Model\Category $cat
     * @return void
     */
    public function setCat(\NetBrothers\Nbdownloader\Domain\Model\Category $cat)
    {
        $this->cat = $cat;
    }

}
