-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


-- --------------------------------------------------------

CREATE TABLE `tl_catalog_fields` (
  `geopickerfield_coordinates` varchar(255) NOT NULL default ' '
) TYPE=MyISAM DEFAULT CHARSET=utf8;