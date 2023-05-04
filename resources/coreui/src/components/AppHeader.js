import React from 'react'
import { NavLink } from 'react-router-dom'
import { useSelector, useDispatch } from 'react-redux'
import { CContainer, CHeader, CHeaderBrand, CHeaderDivider, CHeaderNav, CHeaderToggler, CNavLink, CNavItem } from '@coreui/react'
import CIcon from '@coreui/icons-react'
import { cilBell, cilEnvelopeOpen, cilList, cilMenu } from '@coreui/icons'

import { AppBreadcrumb } from './index'
import { AppHeaderDropdown } from './header/index'
import { logo } from '../assets/brand/logo'
import { navAction } from '../actions'

const AppHeader = () => {
  const dispatch = useDispatch()
  const sidebarShow = useSelector((state) => state.sidebar.sidebarShow)

  function loadNavMain() {
    console.log('call loadNavMain')
    dispatch(navAction.loadNavMain())
  }
  function loadNavProject() {
    dispatch(navAction.loadNavProject())
  }
  function loadNavSetting() {
    dispatch(navAction.loadNavSetting())
  }

  return (
    <CHeader position="sticky" className="mb-4">
      <CContainer fluid>
        <CHeaderToggler className="ps-1" onClick={() => dispatch({ type: 'set', sidebarShow: !sidebarShow })}>
          <CIcon icon={cilMenu} size="lg" />
        </CHeaderToggler>
        <CHeaderBrand className="mx-auto d-md-none" to="/">
          <CIcon icon={logo} height={48} alt="Logo" />
        </CHeaderBrand>
        <CHeaderNav className="d-none d-md-flex me-auto">
          <CNavItem>
            <CNavLink to="/admin/dashboard" component={NavLink} onClick={loadNavMain}>
              Website
            </CNavLink>
          </CNavItem>
          <CNavItem>
            <CNavLink to="/admin/project" component={NavLink} onClick={loadNavProject}>
              Project
            </CNavLink>
          </CNavItem>
          <CNavItem>
            <CNavLink to="/admin/setting" component={NavLink} onClick={loadNavSetting}>
              Setting
            </CNavLink>
          </CNavItem>
        </CHeaderNav>
        <CHeaderNav>
          <CNavItem>
            <CNavLink href="#">
              <CIcon icon={cilBell} size="lg" />
            </CNavLink>
          </CNavItem>
          <CNavItem>
            <CNavLink href="#">
              <CIcon icon={cilList} size="lg" />
            </CNavLink>
          </CNavItem>
          <CNavItem>
            <CNavLink href="#">
              <CIcon icon={cilEnvelopeOpen} size="lg" />
            </CNavLink>
          </CNavItem>
        </CHeaderNav>
        <CHeaderNav className="ms-3">
          <AppHeaderDropdown />
        </CHeaderNav>
      </CContainer>
      <CHeaderDivider />
      <CContainer fluid>
        <AppBreadcrumb />
      </CContainer>
    </CHeader>
  )
}

export default AppHeader
