import React from 'react'
import { CNavItem, CNavTitle } from '@coreui/react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faCalculator, faCogs, faLayerGroup, faUser, faUserTie } from '@fortawesome/free-solid-svg-icons'

const _nav_setting = [
  {
    component: CNavItem,
    name: 'General',
    to: '/settings',
    icon: <FontAwesomeIcon icon={faCogs} className="nav-icon" />,
  },
  {
    component: CNavTitle,
    name: 'Pengguna',
  },
  {
    component: CNavItem,
    name: 'Admin',
    to: '/settings/admin',
    icon: <FontAwesomeIcon icon={faUser} className="nav-icon" />,
  },
  {
    component: CNavItem,
    name: 'Client',
    to: '/settings/client',
    icon: <FontAwesomeIcon icon={faUserTie} className="nav-icon" />,
  },
  {
    component: CNavTitle,
    name: 'Komponen',
  },
  {
    component: CNavItem,
    name: 'Kategori',
    to: '/settings/category',
    icon: <FontAwesomeIcon icon={faLayerGroup} className="nav-icon" />,
  },
  {
    component: CNavItem,
    name: 'Kalkulator Karbon',
    to: '/settings/carbon-calculator',
    icon: <FontAwesomeIcon icon={faCalculator} className="nav-icon" />,
  },
]

export default _nav_setting
