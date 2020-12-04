describe('Carriers form', () => {
    it('works', () => {
        cy.visit('https://of.test/carriers/create')
    }),
    it('let type name', () => {
        cy.visit('https://of.test/carriers/create')

        cy.get('#name')
            .type('Carrier')
            .should('have.value', 'Carrier')
    })
})