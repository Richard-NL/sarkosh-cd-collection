## Synopsis

Typo3 Neos CD collection plugin


## Motivation

Added working version of typo3 neos plugin to github since the examples where not fully documented and incomplete.

## Installation

Plage the files /[NeosDir]/Packages and follow the tutorial http://docs.typo3.org/neos/TYPO3NeosDocumentation/IntegratorGuide/CreatingAPlugin.html
Don't forget to add the auth line in /[NeosDir]/Packages/Sites/TYPO3.NeosDemoTypo3Org/Configuration/Policy.yaml

```
TYPO3_NeosDemoTypo3Org_CdCollectionAccess: 'method(Sarkosh\CdCollection\Controller\CollectionController->(overview|show)Action())'
```
